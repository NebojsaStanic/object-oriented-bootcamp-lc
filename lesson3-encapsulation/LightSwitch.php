<?php

class LightSwitch
{
    protected $message;

    public function on()
    {
        $this->setMessage('Light on');
        return $this->message;
    }

    public function off()
    {
        $this->setMessage('Light off');
        return $this->message;
    }

    private function setMessage($message)
    {
        $this->message = $message;
    }

}

$switch = new LightSwitch;

$status = $switch->off();

var_dump($status);