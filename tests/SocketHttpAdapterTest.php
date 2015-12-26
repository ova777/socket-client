<?php

namespace Http\Socket\Tests;

use Http\Client\Tests\HttpClientTest;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Http\Socket\SocketHttpClient;

class SocketHttpAdapterTest extends HttpClientTest
{
    /**
     * {@inheritdoc}
     */
    protected function createHttpAdapter()
    {
        return new SocketHttpClient(new GuzzleMessageFactory());
    }
}
