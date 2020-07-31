<?php

class Person 
{
  public $name;

  public $age;

  public function __construct($name)
  {
    $this->name = $name;
  }


  // get method
  public function getAge()
  {
    return $this->age * 365;
  }

  // set method
  public function setAge($age)
  {
    // check age with (if statement)
    if ($age < 18) {
      throw new Exception('Person is not old enough');
    }
    $this->age = $age;
  } 
}

$john = new Person('John Doe');
$john->setAge(30);

var_dump($john->getAge());