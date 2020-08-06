<?php

class Math 
{
  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

echo Math::add(1,2,3);