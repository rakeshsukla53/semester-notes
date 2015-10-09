class Person {
    public static $isAlive = "Yep!"
    public static function greet() {
    echo "Hello there!";
}
}

echo Person::$isAlive;
// prints "Yep!"
Person::greet();
// prints "Hello there!"

You probably noticed that we could access the Ninja class constant without actually creating an instance of Ninja, and if you're particularly precocious, you might be wondering whether it's possible to access class properties or methods without creating an instance of the class.



