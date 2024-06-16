<?php

namespace App\Models\Entity;

class User
{
    private string $firstname;
    private string $lastname;
    private string $username;
    private string $email;
    private string $phone;
    private string $address;
    private string $password;
    private string $createdAt;

    public function __construct(string $firstname, string $lastname, string $username, string $email, string $phone, string $address, string $password, string $createdAt)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->password = $password;
        $this->createdAt = $createdAt;
    }

    // Getters
    public function getFirstName(): string
    {
        return $this->firstname;
    }

    public function getLastName(): string
    {
        return $this->lastname;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    // Setters
    public function setFirstName(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function setLastName(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
