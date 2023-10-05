<?php

class Employee
{
    const LEAVES_ALLOWED = 27;
    private $empId;
    private $name;
    private $monthlySalary;
    private $manager;
    private $leavesTaken;
    private $yearsInOrg;
    private $leavesLeftPreviously = [];


    

    function __construct($empId, $monthlySalary, $manager, $name, $leavesTaken,
        $leavesLeftPreviously) {
        $this->empId = $empId;
        $this->name = $name;
        $this->monthlySalary = $monthlySalary;
        $this->manager = $manager;
        $this->leavesTaken = $leavesTaken;
        $this->leavesLeftPreviously = $leavesLeftPreviously;
        $this->yearsInOrg = count($leavesLeftPreviously);
    }

    

    /**
     * Get the value of empId
     */ 
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of monthlySalary
     */ 
    public function getMonthlySalary()
    {
        return $this->monthlySalary;
    }

    /**
     * Get the value of manager
     */ 
    public function getManager()
    {
        return $this->manager;
    }

        /**
         * Get the value of leavesTaken
         */ 
        public function getLeavesTaken()
        {
                return $this->leavesTaken;
        }

    /**
     * Get the value of yearsInOrg
     */ 
    public function getYearsInOrg()
    {
        return $this->yearsInOrg;
    }

    /**
     * Get the value of leavesLeftPreviously
     */ 
    public function getLeavesLeftPreviously()
    {
        $years = 3;
        if ($this->getYearsInOrg() < 3) {
            $years = $this->getYearsInOrg();
        }
        $leavesLeftPreviously = 0;
        for ($i = 0; $i < $years; $i++) {
            $leavesLeftPreviously += $this->getLeavesLeftPreviously()[$this->getYearsInOrg() - $i - 1];
        }
        return $this->leavesLeftPreviously;
    }
    public function getLeavesLeft(){
      return  self::LEAVES_ALLOWED - $this->getLeavesTaken();

    }
}

class employeeFormater{

    private $employee;

    public function __construct(Employee $employee)
    {
        $this->employee=$employee;
        
    }

    public function toHtml(){
        $str = "<div>".
        "<h1>Employee Info</h1>".
        "<div id='emp".$this->employee->getEmpId()."'>".
        "<span>".$this->employee->getName()."</span>".
            "<div class='left'>".
            "<span>Leaves Left :</span>".
            "<span>Annual salary:</span>".
            "<span>Manager:</span>".
            "<span>Reimbursable leaves:</span>".
            "</div>";
        $str .= "<div class='right'><span>".($this->employee->getLeavesLeft())."</span>";
        $str .= "<span>".round($this->employee->getMonthlySalary() * 12)."</span>";
        if ($this->employee->getManager() != null) {
            $str .= "<span>".$this->employee->getManager()."</span>";
        } else {
            $str .= "<span>None</span>";
        }
      
        $str .= "<span>".($this->employee->getLeavesLeft())."</span>";
        return $str."</div> </div>";
    }


}



?>