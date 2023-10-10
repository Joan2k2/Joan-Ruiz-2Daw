<?php
//El código rompía el principio de "Responsabilidad Única" debido a que habian funcioines que no deberían heredar todas las funciones
interface Door
{
    public function lock();
    public function unlock();
    public function open();
    public function close();
    
    
}

interface timeOutCallbackClass{
    public function timeOutCallback();

}

interface proximityCallbackClass{
    public function proximityCallback();

}

class Sensor
{
    public function register(proximityCallbackClass $door)
    {
        while (true) {
            if ($this->isPersonClose()) {
                $door->proximityCallback();
                break;
            }
        }
    }

    private function isPersonClose()
    {
        return random_int(0,1);
    }
}

class SensorDoor implements Door,proximityCallbackClass
{
    protected $locked;
    protected $opened;

    function __construct(Sensor $sensor)
    {
        $sensor->register($this);
    }

    public function lock()
    {
        $this->locked = true;
    }

    public function unlock()
    {
        $this->locked = false;
    }

    public function open()
    {
        if (!$this->locked) {
            $this->opened = true;
        }
    }

    public function close()
    {
        $this->opened = false;
    }

    public function timeOutCallback()
    {
        $this->locked = false;
    }

    public function proximityCallback()
    {
        $this->opened = true;
    }
}

class Timer 
{
    public function register($timeOut, timeOutCallbackClass $door)
    {
        sleep($timeOut);
        $door->timeOutCallback();
    }
}

class TimedDoor implements Door,timeOutCallbackClass
{
    const TIME_OUT = 10;
    private $locked;
    private $opened;

    function __construct(Timer $timer)
    {
        $timer->register(self::TIME_OUT, $this);
    }

    public function lock()
    {
        $this->locked = true;
    }

    public function unlock()
    {
        $this->locked = false;
    }

    public function open()
    {
        if (!$this->locked) {
            $this->opened = true;
        }
    }

    public function close()
    {
        $this->opened = false;
    }

    public function timeOutCallback()
    {
        $this->locked = true;
    }

    public function proximityCallback()
    {
        throw new Exception("Not Implemented");
    }
}