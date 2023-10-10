<?php


  //Esto viola el Principio Sustitución de Liskov al crear una clase que solo tenía un metodo y que era la hija y el padre tenía que heredar de ella
class EmployeeDetails  
{  
    private $HoursWorked;  
    private $HourlyRate; 



    public function CalculateSalary(){
        return $this->HoursWorked * $this->HourlyRate;  
     }
  
    /**
     * Get the value of HoursWorked
     */ 
    public function getHoursWorked()
    {
        return $this->HoursWorked;
    }

    /**
     * Set the value of HoursWorked
     *
     * @return  self
     */ 
    public function setHoursWorked($HoursWorked)
    {
        $this->HoursWorked = $HoursWorked;

        return $this;
    }

    /**
     * Get the value of HourlyRate
     */ 
    public function getHourlyRate()
    {
        return $this->HourlyRate;
    }

    /**
     * Set the value of HourlyRate
     *
     * @return  self
     */ 
    public function setHourlyRate($HourlyRate)
    {
        $this->HourlyRate = $HourlyRate;

        return $this;
    }
} 
?> 