<?php

namespace BionicUniversity\ContactBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contactus');

        $this->assertTrue($crawler->filter('html:contains("Crazy Form")')->count() > 0);
    }
}
