<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\IssuerCollection;

class IssuerRepository extends Repository
{
    protected $uri = 'issuers';

    protected function createCollection($response)
    {
        return new IssuerCollection($response['items']);
    }
}
