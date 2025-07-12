<?php
    namespace Foo\Bar;

    include 'file1.php';

    const FOO = 2;

    function foo() {}

    class foo
    {
        static function staticmethod() {}
    }

    /* Unqualified name */
    foo(); // gọi tới hàm Foo\Bar\foo
    foo::staticmethod(); // gọi tới class Foo\Bar\foo, method staticmethod
    echo FOO; // gọi tới hằng số Foo\Bar\FOO

    /* Qualified name */
    subnamespace\foo(); // gọi tới hàm Foo\Bar\subnamespace\foo
    subnamespace\foo::staticmethod(); // gọi tới class Foo\Bar\subnamespace\foo, method staticmethod
    echo subnamespace\FOO; // gọi tới hằng số Foo\Bar\subnamespace\FOO

    /* Fully qualified name */
    \Foo\Bar\foo(); // gọi tới hàm Foo\Bar\foo
    \Foo\Bar\foo::staticmethod(); // gọi tới class Foo\Bar\foo, method staticmethod
    echo \Foo\Bar\FOO; // gọi tới hằng số Foo\Bar\FOO

?>