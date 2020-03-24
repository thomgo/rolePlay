<?php

/**
 *
 */
class Character
{

  const BASE_LIFE = 100;

  protected $name;
  protected $age;
  protected $description;
  protected $role;
  protected $life;

  function __construct(array $data)
  {
    // The code we use if we do not use an hydrator
    // $this->setName($data["name"]);
    // $this->setAge($data["age"]);
    // $this->setDescription($data["description"]);
    // $this->setRole($data["role"]);
    $this->hydrate($data);
    $this->setLife(self::BASE_LIFE);
  }

  public function hydrate(array $data): Character
  {
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
    return $this;
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
