<?php

namespace ZFT\User;

class User {

    private $id;

    /**
     * @var string
     */
    private $username;

    /** @var  string */
    private $firstName;

    /** @var  string */
    private $surname;

    /** @var  string */
    private $patronymic;

    /**
     * @var Group[]
     */
    private $groups;

    /** @var  string */
    private $email;

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() : int {
        return $this->id;
    }

    /**
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername() : string {
        return $this->username;
    }

    /**
     * @param Group $groups
     */
    public function addToGroup(Group $group) {
        $this->groups[] = $group;
        $group->addUser($this);
    }

    /**
     * @return Group[]
     */
    public function getGroups(): array {
        return $this->groups;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getSurname(): string {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname) {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getPatronymic(): string {
        return $this->patronymic;
    }

    /**
     * @param string $patronymic
     */
    public function setPatronymic(string $patronymic) {
        $this->patronymic = $patronymic;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email) {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }
}
