<?php

namespace Adrj\AdrjBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorksControllerTest extends WebTestCase
{
    public function testWorks()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/works');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/works/{category}');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/works/{category}/show');
    }

}
