<?php
declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use App\State\StripeAccountProcessor;
use App\State\StripeAccountProvider;

#[ApiResource(
    operations:[
        new Get(),
        new Post(),
        new Put('/accounts/{id}/'),
    ],
    provider: StripeAccountProvider::class,
    processor: StripeAccountProcessor::class,
)]
class Account
{
    private ?string $id = 'a';

    private string $type;

    private string $country;

    private string $email;

    private array $capabilities = [
        'card_payments' => [
            'requested' => true,
        ],
        'transfers' => [
            'requested' => true,
        ],
    ];

    private CompanyData $company;

    private array $businessProfile = [];

    private string $businessType;

    /**
     * @var Person[]
     */
    private array $directors;

    private array $owners;
    private array $executives;
    private array $tosAcceptance = [];

    private ExternalAccount $externalAccount;




    private Person $representative;


    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
     * @return array
     */
    public function getBusinessProfile(): array
    {
        return $this->businessProfile;
    }

    /**
     * @param array $businessProfile
     */
    public function setBusinessProfile(array $businessProfile): void
    {
        $this->businessProfile = $businessProfile;
    }

    /**
     * @return string
     */
    public function getBusinessType(): string
    {
        return $this->businessType;
    }

    /**
     * @param string $businessType
     */
    public function setBusinessType(string $businessType): void
    {
        $this->businessType = $businessType;
    }


    /**
     * @return array
     */
    public function getCapabilities(): array
    {
        return $this->capabilities;
    }

    /**
     * @param array $capabilities
     */
    public function setCapabilities(array $capabilities): void
    {
        $this->capabilities = $capabilities;
    }

    /**
     * @return CompanyData
     */
    public function getCompany(): CompanyData
    {
        return $this->company;
    }

    /**
     * @param CompanyData $company
     */
    public function setCompany(CompanyData $company): void
    {
        $this->company = $company;
    }

    /**
     * @return array
     */
    public function getDirectors(): array
    {
        return $this->directors;
    }

    /**
     * @param array $directors
     */
    public function setDirectors(array $directors): void
    {
        $this->directors = $directors;
    }

    /**
     * @return array
     */
    public function getOwners(): array
    {
        return $this->owners;
    }

    /**
     * @param array $owners
     */
    public function setOwners(array $owners): void
    {
        $this->owners = $owners;
    }

    /**
     * @return array
     */
    public function getExecutives(): array
    {
        return $this->executives;
    }

    /**
     * @param array $executives
     */
    public function setExecutives(array $executives): void
    {
        $this->executives = $executives;
    }

    /**
     * @return ExternalAccount
     */
    public function getExternalAccount(): ExternalAccount
    {
        return $this->externalAccount;
    }

    /**
     * @param ExternalAccount $externalAccount
     */
    public function setExternalAccount(ExternalAccount $externalAccount): void
    {
        $this->externalAccount = $externalAccount;
    }

    /**
     * @return Person
     */
    public function getRepresentative(): Person
    {
        return $this->representative;
    }

    /**
     * @param Person $representative
     */
    public function setRepresentative(Person $representative): void
    {
        $this->representative = $representative;
    }

    /**
     * @return array
     */
    public function getTosAcceptance(): array
    {
        return $this->tosAcceptance;
    }

    /**
     * @param array $tosAcceptance
     */
    public function setTosAcceptance(array $tosAcceptance): void
    {
        $this->tosAcceptance = $tosAcceptance;
    }


}