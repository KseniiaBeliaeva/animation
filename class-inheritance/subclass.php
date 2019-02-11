<?php 
/*inheritance 
when a new class takes on the properties and methods of an existing class

Behaviors of a class are shared with subclasses
Add new behaviors to parent and all subclasses gain them
Subclasses can override parent behaviors
Subclasses can extend parent behaviors
-------------
Document (parent - superclass)

|                       |
V                       V
ProductBrochure         WarrantyDocument
            (subclasses)
*/

//Define a subclass

// class ParentClass {}
// class Subclass extends ParentClass {}

class User {
    var $first_name;
    var $last_name;
    var $username;

    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}


class Customer extends User {

}
$u = new User;
$u->first_name = "Jerry";
$u->last_name = "Sainfeld";
$u->username = "jSainfeld";

$c = new Customer;
$c->first_name = "George";
$c->last_name = "Costanza";
$c->username = "gCostanza";

echo $u->full_name() . "<br/>";
echo $c->full_name() . "<br/>";

echo get_parent_class($u) . "<br/>";
echo get_parent_class($c) . "<br/>";

if (is_subclass_of($c, "User")) {
    echo "Instance is a subclass of User <br/>";
}
$parents = class_parents($c);
echo implode(", ", $parents);

?>