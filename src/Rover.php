<?php

class Rover{

  public $x = 0;

  public $y = 0;

  public $direction = "s";

  public function forward(){

    if($this->direction === "s"){

      $this->y++;

    }else if ($this->direction === "w"){

      $this->x--;

    }else if($this->direction === "e"){

      $this->x++;

    }else if($this->direction === "n"){

      $this->y--;

    }

  }

  public function turnLeft(){

    if($this->direction === "s"){

      $this->direction = "e";

    } else if($this->direction === "e"){

    $this->direction = "n";

    } else if($this->direction === "n"){

      $this->direction = "w";

    } else if ($this->direction ==="w"){

      $this->direction = "s";

    }

  }

  public function turnRight(){

    if($this->direction === "s"){

      $this->direction = "w";

    } else if ($this->direction === "w"){

      $this->direction = "n";

    } else if ($this->direction === "n"){

      $this->direction = "e";

    } else if ($this->direction === "e"){

      $this->direction = "s";

    }

  }

  public function backward(){

    $this->y--;

  }

}
