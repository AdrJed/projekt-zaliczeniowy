<?php

namespace Adrj\AdrjFilesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FilesControllerTest extends WebTestCase
{
    public function testAccess()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
