<?php

include_once 'DataBase.php';
include_once 'person.php';
class Parent extends Person
{
    private $DB ;
    private $job ;
    public function __construct() 
    {
        parent::__construct();
        $this->DB= new DataBase() ;
    }
     public function setjop($job)
    {
        $this->job = $job;
    }
     public function getjob()
    {
        return $this->job;
    }
    public function viewEmail()
    {
        
    }
}
