<?php

namespace App\Tests\Http\Controller;

use App\Tests\WebTestCase;

class HomeControllerTest extends WebTestCase
{

    public function testGetHome(): void
    {
        $crawler = $this->client->request('GET', "/");
        $this->assertResponseStatusCodeSame(200);
    }
}
