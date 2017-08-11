<?php
require __DIR__ . '/../src/Hello.php';
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
  public function testOne()
  {
    $this->assertTrue(true);
  }
  public function testHelloExists()
  {
    $hello = new Hello("Filou");
    $this->assertEquals(
      $hello->greetings,
    'Bonjour cher Filou'
  );
  }
  public function testHelloReturnsUsername()
  {
    $hello = new Hello("Robert");
    $this->assertEquals(
      $hello->greetings,
      "Bonjour cher Robert"
    );
  }
  public function testGetName(){
    $hello = new Hello("pomme");

    $name = $hello->getName();

    $this->assertEquals(
      $name,
      'pomme'
    );
  }
  public function testOtherGetName(){
    $hello = new Hello("fromage");

    // La même chose qu'avec pomme mais en plus court, car pas besoin de la variable $name car elle est passée dans le "construct"

    $this->assertEquals(
      $hello->getName(),
      'fromage'
    );
  }
}
