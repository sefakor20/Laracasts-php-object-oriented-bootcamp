<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;


$jeffrey = new Person('Jeffery way');

$staff = new Staff([$jeffrey]);

$laracast = new Business($staff);

$laracast->hire(new Person('Jane Doe'));

var_dump($laracast->getStaffMembers());