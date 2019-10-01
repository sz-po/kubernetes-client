<?php

use Maclof\Kubernetes\Collections\EtcdClusterCollection;

class EtcdClusterCollectionTest extends TestCase
{
    protected $items = [
        [],
        [],
        [],
    ];

    protected function getEtcdClusterCollection()
    {
        $etcdClusterCollection = new EtcdClusterCollection($this->items);

        return $etcdClusterCollection;
    }

    public function test_get_items()
    {
        $etcdClusterCollection = $this->getEtcdClusterCollection();
        $items = $etcdClusterCollection->toArray();

        $this->assertTrue(is_array($items));
        $this->assertEquals(3, count($items));
    }
}
