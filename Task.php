<?php

class Task
{
  public $title;

  public $description;

  public $completed = false;

  // the __construct are special methods that are called immediately when you instanciate your class. This method also accepts arguement
  public function __construct($title, $description)
  {
    $this->title = $title;

    $this->description = $description;
  }

  // complete method
  public function complete()
  {
    $this->completed = true;
  }

}

// instanciate the class
$task = new Task('Learn OOP', 'This is the description bla bla bla...');

$task->complete();

var_dump($task);