<?php

namespace Omniship\FedEx;

use Omniship\Common\AbstractServiceProvider;
use Omniship\Common\Http\Client;
use Omniship\FedEx\Resources\Shipment;

class ServiceProvider extends AbstractServiceProvider
{
    public string $host = 'https://apis.fedex.com';
    public string $sandbox = 'https://apis-sandbox.fedex.com';
    public string $namespace = 'ship/v1';

    public function initialize(array $params = [], $sandbox = false)
    {
        $isSandbox = (isset($params['sandbox']) && $params['sandbox'] === true) || $sandbox === true;

        $this->client = new Client([
            'host' => $isSandbox ? $this->sandbox : $this->host,
            'namespace' => $this->namespace,
            'headers' => [
                'Authorization' => 'Bearer ' . $params['api_key'] ?? '',
                'X-locale' => $params['locale'] ?? 'en_US',
                'Content-Type' => 'application/json',
                'X-Customer-Transaction-Id' => $params['customer_transaction_id'] ?? null
            ]
        ]);

        return $this;
    }

    public function createShipment(array $params = [])
    {
        $response = $this->client->post('shipments', [
            'data' => $params
        ]);

        $attributes = $this->client->jsonFromResponse($response);

        return new Shipment($attributes);
    }
}
