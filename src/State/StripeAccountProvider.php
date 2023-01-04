<?php
declare(strict_types=1);

namespace App\State;
use ApiPlatform\Metadata\CollectionOperationInterface;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use phpDocumentor\Reflection\Utils;
use Stripe\StripeClient;

class StripeAccountProvider implements ProviderInterface
{
    public function __construct(
        private StripeClient $stripeClient
    ) {}

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        if ($operation instanceof CollectionOperationInterface) {
            return $this->stripeClient->accounts->all();
        }

        return $this->stripeClient->accounts->retrieve($uriVariables['id']);
    }
}