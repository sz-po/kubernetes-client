<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\EtcdClusterCollection;

class EtcdClusterRepository extends Repository
{

    protected $uri = 'etcdclusters';

    protected function createCollection($response)
    {
        return new EtcdClusterCollection($response['items']);
    }

}
