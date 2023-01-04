<?php

namespace App\Entity;

class ExternalAccount
{
    private string $object;

    private ?string $accountHolderName = null;

    private ?string $accountHolderType = null;

    private string $bankName;

    private string $country;

    private string $currency;

    private string $accountNumber;

    /**
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param string $object
     */
    public function setObject(string $object): void
    {
        $this->object = $object;
    }

    /**
     * @return string
     */
    public function getAccountHolderName(): ?string
    {
        return $this->accountHolderName;
    }

    /**
     * @param string $accountHolderName
     */
    public function setAccountHolderName(?string $accountHolderName): void
    {
        $this->accountHolderName = $accountHolderName;
    }

    /**
     * @return string
     */
    public function getAccountHolderType(): ?string
    {
        return $this->accountHolderType;
    }

    /**
     * @param string $accountHolderType
     */
    public function setAccountHolderType(?string $accountHolderType): void
    {
        $this->accountHolderType = $accountHolderType;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     */
    public function setBankName(string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber(string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }
}