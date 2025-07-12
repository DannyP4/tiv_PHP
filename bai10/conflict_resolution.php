<?php
    trait A {
        public function smallTalk() {
            echo 'a';
        }
        public function bigTalk() {
            echo 'A';
        }
    }

    trait B {
        public function smallTalk() {
            echo 'b';
        }
        public function bigTalk() {
            echo 'B';
        }
    }

    class Talker {
        use A, B {
            B::smallTalk insteadOf A;    // dùng smallTalk từ B
            A::bigTalk insteadOf B;      // dùng bigTalk từ A
            B::bigTalk as talk;          // dùng talk thay cho bigTalk từ B
        }
    }

    $talker = new Talker();

    $talker->smallTalk();   // ➜ b
    echo "<br>";

    $talker->bigTalk();     // ➜ A
    echo "<br>";

    $talker->talk();        // ➜ B
?>