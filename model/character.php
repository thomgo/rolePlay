<?php

/**
 *
 */
class Character
{

  const BASE_LIFE = 100;

  protected string $name;
  protected int $age;
  protected string $description;
  protected string $role;
  protected string $image;
  protected int $life;

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
      if (strlen($name) > 50 || preg_match('/[^A-Za-z ]/', $name)) {
        throw new Exception('Name can not be longer than 50 and must contain only letters');
      }
      $this->name = $name;

      return $this;
  }


  public function getAge(): int
  {
      return $this->age;
  }

  public function setAge(int $age): Character
  {
      if ($age < 15 || $age > 1000) {
        throw new Exception('Age must be between 15 and 1000 years');
      }
      $this->age = $age;

      return $this;
  }


  public function getDescription(): string
  {
      return $this->description;
  }

  public function setDescription(string $description): Character
  {
      if (strlen($description) > 150 || preg_match('/[^A-Za-z0-9 ]/', $description)) {
        throw new Exception('Description can not be longer than 150 and must contain only letters or numbers');
      }
      $this->description = $description;

      return $this;
  }


  public function getRole(): string
  {
      return $this->role;
  }

  public function setRole(string $role): Character
  {
      if (!in_array($role, ["warrior", "archer", "wizard"])) {
        throw new Exception("The role must be either warrior, wizard or archer");
      }
      $this->role = $role;
      $this->setImage($role);
      return $this;
  }


  public function getImage(): string
  {
    return $this->image;
  }

  public function setImage(string $role): Character
  {
    if ($role === "warrior") {
      $this->image = "icon-267";
    }
    elseif ($role === "archer") {
      $this->image = "icon-200";
    }
    else {
      $this->image = "icon-255";
    }
    
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
