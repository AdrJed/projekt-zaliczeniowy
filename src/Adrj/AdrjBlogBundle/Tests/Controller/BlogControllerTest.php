<?php

namespace Adrj\AdrjBlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testBlog()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blog');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blog/show');
    }

}
