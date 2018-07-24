<?php

class Cat {
    private $firstname;
    private $age;
    private $color;
    private $sex;
    private $race;

    private static $gender = ['male', 'female'];

    public function __construct($firstname, $age, $color, $sex, $race) {
        $this->setFirstname($firstname)->setAge($age)->setColor($color)->setSex($sex)->setRace($race);
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname(): string {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname) {
        if(strlen($firstname) <= 3 || strlen($firstname) > 20) {
            throw new RuntimeException('The length of the firstname must be between 3 & 20 characters.');
        }

        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge(): int {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age) {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor(string $color) {
        if(strlen($color) <= 3 || strlen($color) > 10) {
            throw new RuntimeException('The length of the color must be between 3 & 10 characters.');
        }

        $this->color = $color;
        return $this;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex(): string {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex(string $sex) {
        if(!in_array($sex, self::$gender)) {
            throw new RuntimeException('Gender is not allowed');
        }

        $this->sex = $sex;
        return $this;
    }

    /**
     * Get the value of race
     */ 
    public function getRace(): string {
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace(string $race) {
        if(strlen($race) <= 3 || strlen($race) > 20) {
            throw new RuntimeException('The length of the race must be between 3 & 20 characters.');
        }

        $this->race = $race;
        return $this;
    }

    public function getInfo() {
        return [
            "firstname" => $this->getFirstname(),
            "age" => $this->getAge(),
            "color" => $this->getColor(),
            "sex" => $this->getSex(),
            "race" => $this->getRace(),
        ];
    }
}