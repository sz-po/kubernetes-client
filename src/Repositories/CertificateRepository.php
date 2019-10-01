<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\CertificateCollection;

class CertificateRepository extends Repository
{
    protected $uri = 'certificates';

    protected function createCollection($response)
    {
        return new CertificateCollection($response['items']);
    }
}
