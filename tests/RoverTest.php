<?php

require __DIR__ . '/../src/Roverbis.php';

use PHPUnit\Framework\TestCase;

class roverTest extends TestCase{

  public function testRover(){

    $rover = new Rover();

    $this->assertEquals($rover->x,0);

    $this->assertEquals($rover->y,0);

    $this->assertEquals($rover->direction, "s");

}

public function testForward(){

$rover = new Rover();

$rover->forward();

$this->assertEquals($rover->x,0);

$this->assertEquals($rover->y,1);

$this->assertEquals($rover->direction, "s");

}

public function testForwardTwice(){

  $rover = new Rover();

  $rover->forward();

  $rover->forward();

  $this->assertEquals($rover->x,0);

  $this->assertEquals($rover->y,2);

  $this->assertEquals($rover->direction, "s");

}

public function testTurnLeft(){

  $rover = new Rover();

  $rover->TurnLeft();

  $this->assertEquals($rover->x,0);

  $this->assertEquals($rover->y,0);

  $this->assertEquals($rover->direction,"e");

}

public function testTurnLeftTwice(){

  $rover = new Rover();

  $rover->turnLeft();

  $rover->turnLeft();

  $this->assertEquals($rover->x,0);

  $this->assertEquals($rover->y,0);

  $this->assertEquals($rover->direction,"n");

}

public function testTurnRight(){

  $rover = new Rover();

  $rover->TurnRight();

  $this->assertEquals($rover->x,0);

  $this->assertEquals($rover->y,0);

  $this->assertEquals($rover->direction,"w");

}

public function testTurnRightTwice(){

  $rover = new Rover();

  $rover->turnRight();

  $rover->turnRight();

  $this->assertEquals($rover->x,0);

  $this->assertEquals($rover->y,0);

  $this->assertEquals($rover->direction,"n");

}

public function testBackward(){

  $rover = new Rover();

  $rover->backward();

  $this->assertEquals($rover->x,0);

  $this->assertEquals($rover->y,-1);

  $this->assertEquals($rover->direction,"s");

}

// public function parcours(){

//   $this->x+5;

//   $this->y+4;

//   $this->direction = "e";

//

// }

}
