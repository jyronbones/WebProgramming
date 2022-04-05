<?php
class Employee{
    protected $employeeId;
    protected $firstName;
    protected $lastName;
    
    function __construct($employeeId, $firstName, $lastName){
        $this->employeeId = $employeeId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getEmployeeId(){
        return $this->employeeId;
    }
    public function setEmployeeId($employeeId){
        $this->employeeId = $employeeId;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
}