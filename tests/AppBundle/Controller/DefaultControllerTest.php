<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndexRedirected()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/test');

        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/test/'));
    }
}
