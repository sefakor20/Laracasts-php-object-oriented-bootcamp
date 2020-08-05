<?php

abstract class Shape 
{
  protected $color;

  public function __construct($color = 'red')
  {
    $this->color = $color;
  }

  // get color
  public function getColor()
  {
    return $this->color;
  }

  // set color
  public function setColor($color)
  {
    $this->color = $color;
  }


  // abstract methods does not need to have a body (always no {curly braces})
  abstract protected function getArea();
  
}


// square class
class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
      return pow($this->length, 2);
    }
}


// Triangle class
class Triangle  extends Shape
{
    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
      return .5 * $this->base * $this->height;
    }
}


// Circle class
class Circle extends Shape
{
  protected $radius = 5;

  public function getArea()
  {
    return M_PI * pow($this->radius, 2);
  }
}

// $circle = new Circle();
// echo $circle->getArea();

(new Circle)->getArea();