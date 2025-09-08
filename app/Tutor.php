<?php

namespace App;

class Tutor extends Student
{
  public string $group;

  public function __construct(string $name, int $age, array $marks, string $group)
  {
    parent::__construct($name, $age, $marks);
    $this->group = $group;
  }

  public function study(): void
  {
    print("Я $this->name, мне $this->age, я учусь в МИДИС и помогаю другим учиться");
  }

}