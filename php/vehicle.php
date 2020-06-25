<?php


class vehicle
{
    protected $name;
    protected $axles;
    protected $wheels;
    protected $body;
    protected $engine;
    protected $music;
    protected $rev;
    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAxles()
    {
        return $this->axles;
    }

    public function getWheels()
    {
        return $this->wheels;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getMusic()
    {
        return $this->music;
    }

    public function getRev()
    {
        return $this->rev;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAxles($axles)
    {
        $this->axles = $axles;
    }

    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    public function setMusic($music)
    {
        $this->music = $music;
    }

    public function setRev($rev)
    {
        $this->rev = $rev;
    }

    function redneck()
    {
        echo  $this->getRev() . " " . $this->value . "! vvrrrmm vrrrm <br>";
    }
    function song()
    {
        echo  $this->getMusic() .' in my '. $this->value .'!<br>';
    }

    function build()
    {
        echo "<h3>I am a " . $this->value . "</h3>";
        echo "Name: " . $this->getName() . "<br>";
        echo "Axles: " . $this->getAxles() . "<br>";
        echo "Wheels: " . $this->getWheels() . "<br>";
        echo "Body: " . $this->getBody() . "<br>";
        echo "Engine: " . $this->getEngine() . "<br>";
    }
}

class car extends vehicle {
    protected $make;
    protected $model;
    protected $year;

    function __construct($value)
    {

        parent::__construct($value);
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setMake($make)
    {
        $this->make = $make;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    function vehicle($name, $axles, $wheels, $body, $engine)
    {
        parent::setName($name);
        parent::setAxles($axles);
        parent::setWheels($wheels);
        parent::setBody($body);
        parent::setEngine($engine);
    }

    function build()
    {
        parent::build();
        echo "Make: " . $this->getMake() ."<br>";
        echo "Model: " . $this->getModel() . "<br>";
        echo "Year: " . $this->getYear() . "<br>";
        parent::redneck();
        parent::song();
    }
}

class truck extends car {
    protected $powertrain;

    public function __construct($value) {

        parent::__construct($value);
    }

    public function getPowertrain()
    {
        return $this->powertrain;
    }

    public function setPowertrain($powertrain)
    {
        $this->powertrain = $powertrain;
    }

    function build()
    {
        echo "Powertrain: " . $this->getPowertrain() . "<br>";
        parent::build();
    }

}
