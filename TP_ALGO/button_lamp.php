<?php


class Button {

    private Lamp $lamp;
    protected bool $stateButton = false;
    
    private function setLamp(Lamp $lamp) { $this->lamp = $lamp; }
    public function __construct(Lamp $lamp) { $this->setLamp($lamp); }

    public function switchDevice() : string {
        $this->lamp->stateLamp();
        return $this->lamp->getStateLamp();
    }
    
}



final class Lamp extends Button {

    protected string $stateLamp;

    public function __construct() { $this->setStateLamp(); }
    private function setStateLamp() { $this->stateLamp = "off"; }
    protected function getStateLamp() { return $this->stateLamp; }

    protected function stateLamp() {
        if( !$this->stateButton ) {
            $this->stateButton = true;
            $this->stateLamp = "on";
            return $this->stateLamp;
        
        }elseif( $this->stateButton ) {
            $this->stateButton = false;
            $this->stateLamp = "off";
            return $this->stateLamp;
        }
    }

}

$lamp = new Button(new Lamp);

echo $lamp->switchDevice().PHP_EOL;
echo $lamp->switchDevice().PHP_EOL;
echo $lamp->switchDevice().PHP_EOL;
echo $lamp->switchDevice().PHP_EOL;




