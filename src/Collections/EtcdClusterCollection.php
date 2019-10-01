<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\EtcdCluster;

class EtcdClusterCollection extends Collection
{
    /**
     * The constructor.
     *
     * @param array $items
     */
    public function __construct(array $items)
    {
        parent::__construct($this->getEtcdClusters($items));
    }

    /**
     * Get an array of etcd clusters.
     *
     * @param  array $items
     * @return array
     */
    protected function getEtcdClusters(array $items)
    {
        foreach ($items as &$item) {
            if ($item instanceof EtcdCluster) {
                continue;
            }

            $item = new EtcdCluster($item);
        }

        return $items;
    }
}
