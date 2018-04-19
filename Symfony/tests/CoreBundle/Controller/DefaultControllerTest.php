<?php

namespace CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('Genevieve Cornu', $client->getResponse()->getContent());
    }

    public function testMentions()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mentions');

        $this->assertContains('Mentions', $client->getResponse()->getContent());
    }

    public function testPlan()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/plan');

        $this->assertContains('Plan', $client->getResponse()->getContent());
    }

}
