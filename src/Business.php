<?php 


namespace Acme;

use Acme\Users\Person;

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