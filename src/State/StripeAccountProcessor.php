<?php
declare(strict_types=1);

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\Entity\Account;
use Stripe\StripeClient;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class StripeAccountProcessor implements ProcessorInterface
{
    public function __construct(
        private StripeClient $stripeClient,
        private SerializerInterface $serializer
    ) {}

    public function process($data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        /** @TODO Remove after refactoring */
        switch ($operation->getMethod()) {
            case 'POST':
                return $this->create($data);
            case 'PATCH':
            case 'PUT':
            case 'DELETE':
                break;
        }
    }

    protected function create(Account $data)
    {
        $serialized = json_decode($this->serializer->serialize($data, 'json'), true);
        unset($serialized['id']);

        dump($serialized);
        $result = $this->stripeClient->accounts->create($serialized);

        dump($result->toArray());exit();
        return $data;
    }
}