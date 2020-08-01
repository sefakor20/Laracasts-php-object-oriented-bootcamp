<?php

class Person 
{
  /**
   * Also ensure to set your properties to private or protected if you dont want the outside world to access it
   * 
   * When set to public it can be accessed by the outside world
   */
  private $name;

  private $age;

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

// $john->age = 8;

var_dump($john->getAge());