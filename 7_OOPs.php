<?php
class player{
 //Properties
 public $name;
 public $speed=3;
//method
  function set_name($name){
    $this->name=$name;
  }
  function get_name(){
    return $this->name;
  }
  
}


$player1=new player();
$player1->set_name("Rounak");
echo $player1->get_name();


// ......constructor........


    class Employee{
        // Properties of our Class
        public $name;
        public $salary;

        // Methods of Our Class
        // Constructor - It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated.

        // Constructor without arguments
        // function __construct(){
        //     echo "This is my constructor for employee";
        // }

        // Constructor with arguments
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;

        }

    }

    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 10000);
    $skillF = new Employee("SkillF", 56000); 

    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of skillF is $skillF->salary";



  //.................Destructor..............
  class Employee{
        // Properties of our Class
        public $name;
        public $salary; 

        // Constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }

        // Destructor
        function __destruct(){
            echo "I am destructing $this->name <br>";
        }
    }

    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 10000);
    $skillF = new Employee("SkillF", 56000); 

    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of skillF is $skillF->salary <br>";

//.............Access modifier...................
// Access modifiers in Php
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from withing the class and from derived class

    // By default the properties and methods are treated as public
    // Private properties and methods can only be accessed by other member functions of the class

    
    class Employee{

        private $name = "harry";

        function showName(){
            echo "$this->name";
        }
    }

    $harry = new Employee();
    // echo $harry->name; -> This will not work if harry is private
    $harry->showName();



The var keyword in PHP is used to declare a property or variable of class which is public by default. The var keyword is same as public when declaring variables or property of a class.
class className {
   var $variable = "GeeksforGeeks";
   // Other statements
}



//.....................Inhertance......................
 echo "What is Inheritance?<br>";
    class Employee{

        public $name = "harry";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employee{
        private $language = "php";

        function changeLanguage($lang){
            $this->language = $lang; 
            // echo $this->grade; --> This will throw an error because grade is private in the parent class
        }
    }

    $rohan = new Employee();
    $rohan->name = "Rohan";
    $rohan->setSalary(100);
    $rohan->getSalary();
    $rohan->showName();

    $shubham = new Employee();
    $shubham->name = "Shubham";
    $shubham->setSalary(10000000);
    $shubham->getSalary();
    $shubham->showName();

    $geeta = new Programmer();
    $geeta->name = "Geeta";
    echo $geeta->changeLanguage("Python");
    $geeta->getSalary();
    $geeta->showName();



//NB: protected mainly use when we want to make something private but also want that class access by derived class
//then we need protected bcz in private another class also cant access elements



?>
