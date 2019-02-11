<?php 

class Student {

    var $first_name;
    var $last_name;
    var $employed = false;
    var $country = "None";

//adding a method

function say_hello(){
    return "Hello World!";
}  

//refer to the Instance using THIS keyword for getting a property or method
// outside the class : $variable->
// inside the class : $this->

function full_name () {
    return $this->first_name . " " . $this->last_name;
}
}

$student1 = new Student;
$student1->first_name = "Anna";
$student1->last_name = "Cook";




$student2 = new Student;
$student2->first_name = "John";
$student2->last_name = "Mertz";

echo $student1->full_name() . "<br/>";
echo $student2->full_name();


//get class methods
$class_methods = get_class_methods("Student");
echo "<b> Class methods:" . implode(", ",$class_methods) . "</b><br/>";

if (method_exists("Student", "say_hello")) {
    echo "Method say_hello() exists in Student class";
} else {
    echo "Does not exists";
}
?>