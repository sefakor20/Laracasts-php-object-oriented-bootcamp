<?php


namespace Acme;

use Acme\Users\Person;

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