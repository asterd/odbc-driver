<?php

namespace Ccovey\ODBCDriver;

use Illuminate\Database\Connectors\Connector;
use Illuminate\Database\Connectors\ConnectorInterface;

class ODBCDriverConnector extends Connector implements ConnectorInterface
{
    public function connect(array $config)
    {
        $dsn = array_get($config, 'dsn');

        $options = $this->getOptions($config);
        $connection = $this->createConnection($dsn, $config, $options);

        return $connection;
    }
}