<?php
declare(strict_types=1);
namespace App\Entity;

class CompanyData
{
    private Address $address;


    private bool $directors_provided = true;

    private bool $owners_provided = true;

    private bool $executives_provided = true;

    private string $name;

    private string $phone;

    private string $taxId;

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

    /**
     * @return bool
     */
    public function isDirectorsProvided(): bool
    {
        return $this->directors_provided;
    }

    /**
     * @param bool $directors_provided
     */
    public function setDirectorsProvided(bool $directors_provided): void
    {
        $this->directors_provided = $directors_provided;
    }

    /**
     * @return bool
     */
    public function isOwnersProvided(): bool
    {
        return $this->owners_provided;
    }

    /**
     * @param bool $owners_provided
     */
    public function setOwnersProvided(bool $owners_provided): void
    {
        $this->owners_provided = $owners_provided;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }

    /**
     * @param string $taxId
     */
    public function setTaxId(string $taxId): void
    {
        $this->taxId = $taxId;
    }

    /**
     * @return bool
     */
    public function isExecutivesProvided(): bool
    {
        return $this->executives_provided;
    }

    /**
     * @param bool $executives_provided
     */
    public function setExecutivesProvided(bool $executives_provided): void
    {
        $this->executives_provided = $executives_provided;
    }
}