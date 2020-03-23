<?php

/**
 *
 */
class Character
{
  protected $name;

  function __construct($name)
  {
    $this->setName($name);
  }

  public function getName(): string
  {
      return $this->name;
  }

  public function setName(string $name): Character
  {
      $this->name = $name;

      return $this;
  }

}
