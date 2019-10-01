<?php

use Maclof\Kubernetes\Models\EtcdCluster;

class EtcdClusterTest extends TestCase
{
    public function test_get_schema()
    {
        $etcdCluster = new EtcdCluster();

        $schema = trim($etcdCluster->getSchema());
        $fixture = trim($this->getFixture('etcd-clusters/empty.json'));

        $this->assertEquals($fixture, $schema);
    }

    public function test_get_metadata()
    {
        $etcdCluster = new EtcdCluster([
            'metadata' => [
                'name' => 'test',
            ],
        ]);

        $metadata = $etcdCluster->getMetadata('name');

        $this->assertEquals($metadata, 'test');
    }
}
