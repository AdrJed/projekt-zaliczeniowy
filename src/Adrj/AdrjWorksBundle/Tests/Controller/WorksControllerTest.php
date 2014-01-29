<?php

namespace Adrj\AdrjWorksBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorksControllerTest extends WebTestCase
{
    public function testWorks()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{category}');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{category}/show');
    }

}
