<?php

namespace Ccovey\ODBCDriver;

use Illuminate\Database\Connectors\Connector;
use Illuminate\Database\Connectors\ConnectorInterface;
use Illuminate\Support\Arr;

class ODBCDriverConnector extends Connector implements ConnectorInterface
{
    /**
     * @throws \Exception
     */
    public function connect(array $config)
    {
        $dsn = Arr::get($config, 'dsn');

        $options = $this->getOptions($config);
        $connection = $this->createConnection($dsn, $config, $options);

        return $connection;
    }
}
