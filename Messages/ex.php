<?php

// person class
class Person 
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}


// business class
class Business 
{
  protected $staff;

  public function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }


  // hire method
  public function hire(Person $person)
  {
    // add $person to the staff collection
    $this->staff->add($person);
  }

  // get staff members
  public function getStaffMembers()
  {
    return $this->staff->members();
  }

}


// staff class
class Staff 
{
  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }

  // add person method
  public function add(Person $person)
  {
    $this->members[] = $person;
  }

  // return array of members
  public function members()
  {
    return $this->members;
  }
}

$jeffrey = new Person('Jeffery way');

$staff = new Staff([$jeffrey]);

$laracast = new Business($staff);

$laracast->hire(new Person('Jane Doe'));

var_dump($laracast->getStaffMembers());
 