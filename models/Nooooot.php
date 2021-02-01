<?php
include_once 'DataBase.php';

    class Activity 
{
    private $title ;
    private $ID;
    private $name;
    private $date;
    private $price;
    private $DB ; 
    
     public function __construct() 
    {
        $this->DB = new DataBase() ;
    }
    
    
     public function setTitle($title)
    {
        $this->title = $title ;
    }
    public function setID($ID)
    {
        $this->ID = $ID ;
    }
   public function setName($name)
    {
        $this->name = $name ;
    }
    public function setDate($date)
    {
        $this->date = $date ;
    }
    public function setPrice($price)
    {
       $this->price = $price ;
    }
    
    //get :(
    
    public function getTitle()
    {
        return $this->title ;
    }
    public function getID()
    {
        return $this->ID ;
    }
    public function getName()
    {
        return $this->name ;
    }
    public function getDate()
    {
        return $this->date ;
    }
    public function getPrice()
    {
        return $this->price ;
    }
    
    
}