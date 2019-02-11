<?php 

class Student {

    var $first_name;
    var $last_name;
    var $employed = false;
    var $country = "None";


}

$student1 = new Student;
$student1->first_name = "Anna";
$student1->last_name = "Cook";

echo $student1->first_name;

$student2 = new Student;




$class_names = ["Product", "Student", "student"];
foreach ($class_names as $class_name) {
    if (is_a($student1, $class_name)) {
        echo "student1 is a {$class_name}.<br/>";
    } else {
        echo "student1 is not a {$class_name}.<br/>";

    }
}

?>