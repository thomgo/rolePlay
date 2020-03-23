<?php

/**
 *
 */
class Character
{
  protected $name;
  protected $age;
  protected $description;
  protected $role;
  protected $life;

  function __construct(array $data)
  {
    $this->setName($data["name"]);
    $this->setAge($data["age"]);
    $this->setDescription($data["description"]);
    $this->setRole($data["role"]);
    $this->setLife(100);
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


  public function getAge(): int
  {
      return $this->age;
  }

  public function setAge(int $age): Character
  {
      $this->age = $age;

      return $this;
  }


  public function getDescription(): string
  {
      return $this->description;
  }

  public function setDescription(string $description): Character
  {
      $this->description = $description;

      return $this;
  }


  public function getRole(): string
  {
      return $this->role;
  }

  public function setRole(string $role): Character
  {
      $this->role = $role;

      return $this;
  }


  public function getLife(): int
  {
      return $this->life;
  }

  public function setLife(int $life): Character
  {
      $this->life = $life;

      return $this;
  }

}
