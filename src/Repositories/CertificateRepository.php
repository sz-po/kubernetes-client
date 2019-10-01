<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\CertificateCollection;
use Maclof\Kubernetes\Repositories\Strategy\PatchMergeTrait;

class CertificateRepository extends Repository
{
    use PatchMergeTrait;

    protected $uri = 'certificates';

    protected function createCollection($response)
    {
        return new CertificateCollection($response['items']);
    }

}
