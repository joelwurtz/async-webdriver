<?php

namespace AsyncWebDriver;

use Amp\Artax\Client;
use Amp\Artax\Request;
use Amp\CancellationToken;
use Amp\Promise;

class WebDriverClient implements Client
{
    private $client;

    private $endpoint;

    public function __construct($endpoint)
    {
        $remote = str_replace('http', 'tcp', $endpoint);
        $socketPool = new \Amp\Artax\HttpSocketPool(new \Amp\Socket\StaticSocketPool($remote, new \Amp\Socket\BasicSocketPool()));
        $this->client =  new \Amp\Artax\DefaultClient(null, $socketPool);
        $this->endpoint = $endpoint;
    }

    public function request($uriOrRequest, array $options = [], CancellationToken $cancellation = null): Promise
    {
        if ($uriOrRequest instanceof Request) {
            $uriOrRequest = $uriOrRequest->withUri($this->endpoint.$uriOrRequest->getUri());
        }

        return $this->client->request($uriOrRequest, $options, $cancellation);
    }
}
