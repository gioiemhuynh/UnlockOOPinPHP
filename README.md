# unlock_OOPInPhp

This is repo to lear about OOP in PHP
Author: Huynh Van Gioi Em - TLAIT

1. What is the class and object?

- A class is a template for objects, and an object is an instance of class.

2. Constructor

- A constructor allows you to initialize an object's properties upon creation of the object.

3. What are Abstract Classes and Methods?

- Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out
  the tasks.
- An abstract class is a class that contains at least one abstract method. An abstract method is a method that is
  declared, but not implemented in the code.

4. What are Interfaces?

- Interfaces allow you to specify what methods a class should implement.
- Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same
  interface, it is referred to as "polymorphism".

5. Interfaces vs. Abstract Classes

- Interfaces cannot have properties, while abstract classes can
- All interface methods must be public, while abstract class methods is public or protected
- All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not
  necessary
- Classes can implement an interface while inheriting from another class at the same time

6. Trait

- PHP only supports single inheritance: a child class can inherit only from one single parent.
- So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
- Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods
  that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

7. Namespaces

- Namespaces are qualifiers that solve two different problems:
    + They allow for better organization by grouping classes that work together to perform a task
    + They allow the same name to be used for more than one class
