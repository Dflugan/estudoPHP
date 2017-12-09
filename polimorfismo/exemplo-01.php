<?php
abstract class Animal
{
  public function move()
  {
    return "Anda";
  }
  public function falar()
  {
    return "som";
  }
}

class Cachorro extends Animal
{
  public function falar()
  {
    return "Late";
  }
}

class Gato extends Animal
{
    public function falar()
    {
      return "Mia";
    }
}

class Passaro extends Animal
{
  public function falar()
  {
    return "Canta";
  }
  public function move()
  {
    return "Voa e" . parent::move();
  }
}

$plutos = new Cachorro;
echo $plutos->falar() . "<br/>";
echo $plutos->move();

echo "------------------------------<br/>";

$garfield = new Gato;
echo $garfield->falar() . "<br/>";
echo $garfield->move();

echo "------------------------------<br/>";

$ave = new Passaro;
echo $ave->falar() . "<br/>";
echo $ave->move();



 ?>
