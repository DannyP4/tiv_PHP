<?php

    class Bank {
        private $pdo;

        public function __construct() {
            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=bank", "root", "");
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->exec("SET NAMES utf8");
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }

        public function transfer($from, $to, $amount) {
            try {
                // Begin transaction
                $this->pdo->beginTransaction();

                // Check available amount from sender account
                $sql = 'SELECT amount FROM accounts WHERE id = :from';
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([':from' => $from]);
                $availableAmount = (float) $stmt->fetchColumn();
                $stmt->closeCursor();

                // If not enough balance, stop transaction
                if ($availableAmount < $amount) {
                    echo 'Insufficient amount to transfer';
                    return false;
                }

                // Deduct amount from sender
                $sql_update_from = 'UPDATE accounts SET amount = amount - :amount WHERE id = :from';
                $stmt = $this->pdo->prepare($sql_update_from);
                $stmt->execute([':from' => $from, ':amount' => $amount]);
                $stmt->closeCursor();

                // Add amount to receiver
                $sql_update_to = 'UPDATE accounts SET amount = amount + :amount WHERE id = :to';
                $stmt = $this->pdo->prepare($sql_update_to);
                $stmt->execute([':to' => $to, ':amount' => $amount]);
                $stmt->closeCursor();

                // Commit transaction
                $this->pdo->commit();

                echo 'The amount has been transferred successfully';

                return true;
            } catch (PDOException $e) {
                $this->pdo->rollBack();
                die($e->getMessage());
            }
        }
    }

    $bank = new Bank();
    // Transfer 200 from account 1 to account 2
    $bank->transfer(1, 2, 200);
?>
