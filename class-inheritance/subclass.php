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

class User
{
    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User
{
    var $city;
    var $state;
    var $country;

    function location() {
        return $this->city . ", " . $this->state . ", " . $this->country;
    }
}

class AdminUser extends User {
    var $is_admin = true;

    function full_name()
{
    return $this->first_name . " " . $this->last_name . " (Admin)." ;
}
}

$g = new AdminUser;
$g->first_name = "Lolla";
$g->last_name = "Stanly";
$g->username = "lolla3472";
echo $g->full_name();
if (!$g->is_admin) {
    echo $g->first_name . "is not an Admin";
} else {
    echo $g->first_name . "is an Admin";

}

$u = new User;
$u->first_name = "Jerry";
$u->last_name = "Sainfeld";
$u->username = "jSainfeld";

$c = new Customer;
$c->first_name = "George";
$c->last_name = "Costanza";
$c->username = "gCostanza";
$c->city = "New York";
$c->state = "New York";
$c->country = "United States";


echo $u->full_name() . "<br/>";
echo $c->full_name() . "<br/>";
echo $c->location() . "<br/>";
// echo $u->location() . "<br/>"; // no method error


echo get_parent_class($u) . "<br/>";
echo get_parent_class($c) . "<br/>";

if (is_subclass_of($c, "User")) {
    echo "Instance is a subclass of User <br/>";
}
$parents = class_parents($c);
echo implode(", ", $parents);
