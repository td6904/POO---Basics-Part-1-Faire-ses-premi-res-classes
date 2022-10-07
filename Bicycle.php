<?php

class Bicycle

{
  private string $color;

  private int $currentSpeed;

  private int $nbSeats;

  private int $nbWheels;

  public function getColor(): string
  {
      return $this->color;
  }

  public function setColor(string $color): void
  { if(!empty($color)){
    $this->color = $color;
  }
}
//^^^^^^^^^^ Not sure if rule but think setter needs a function with it to work.

 /* public function setColor(string $color): void
{
    $this->color = $color;
}

  public function forward(): string
{
    $this->currentSpeed = 15;
    return "Go !";
}

public function brake(): string{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!! ";
   }

   $sentence .= "I'm stopped !";
   return $sentence;

}
}
*/
}


class Car {

    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    
    public function __construct(string $color, int $nbSeats, string $energy){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }


    public function forward(): string
    {
        $this->currentSpeed = 25;
        return "Go !";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

    public function getNbWheels(){
        return $this->nbWheels;
    }

    public function getCurrentSpeed (){
        return $this->currentSpeed ;
    }

    
    public function getColor (){
        return $this->color ;
    }

    public function getNbSeats(){
        return $this->nbSeats;
    }

    public function getEnergy (){
        return $this->energy ;
    }

    public function getEnergyLevel (){
        return $this->energyLevel ;
    }
}