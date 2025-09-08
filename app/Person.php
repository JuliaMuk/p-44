<?php

namespace App;

abstract class Person
{
  public string $gender;

  public function live(){
    print("<p>Я живу! </p>");
  }

  abstract public function breathe();
}