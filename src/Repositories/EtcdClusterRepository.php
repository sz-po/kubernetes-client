<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\EtcdClusterCollection;
use Maclof\Kubernetes\Repositories\Strategy\PatchMergeTrait;

class EtcdClusterRepository extends Repository
{
    use PatchMergeTrait;

    protected $uri = 'etcdclusters';

    protected function createCollection($response)
    {
        return new EtcdClusterCollection($response['items']);
    }

}
