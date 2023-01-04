<?php
declare(strict_types=1);

namespace App\Entity;
class Person
{
    private DateOfBirth $dob;

    private string $email;

    private string $firstName;

    private string $lastName;

    private Address $address;

    private array $relationship = [
        'title' => 'CEO',
    ];

    /**
     * @return DateOfBirth
     */
    public function getDob(): DateOfBirth
    {
        return $this->dob;
    }

    /**
     * @param DateOfBirth $dob
     */
    public function setDob(DateOfBirth $dob): void
    {
        $this->dob = $dob;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return array
     */
    public function getRelationship(): array
    {
        return $this->relationship;
    }

    /**
     * @param array $relationship
     */
    public function setRelationship(array $relationship): void
    {
        $this->relationship = $relationship;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}