<?php 

use Goutte\Client;

class ListsTest extends TestCase
{
  
  public function testUserSeesPageTitle()
  {
    $client = new Client();
    $crawler = $client->request('GET', 'http://localhost:8000/lists');

    $this->assertEquals(200, $client->getResponse()->getStatus());
    $this->assertCount(1,
      $crawler->filter('h1:contains("Lists")'));
  }
}