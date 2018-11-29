<?php
declare(strict_types=1);


/**
 * Class Hahaha.
 *
 * @author Iulia Todirică <iuliat@dreamlabs.ro>
 */
class Hahaha
{
    protected $name;
    
    protected $age;
    
    /**
     * Hahaha constructor.
     *
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
    
    /**
     * Get the value of the name property.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set the value of the name property.
     *
     * @param mixed $name
     *
     * @return Hahaha
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get the value of the age property.
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
    
    /**
     * Set the value of the age property.
     *
     * @param mixed $age
     *
     * @return Hahaha
     */
    public function setAge($age)
    {
        $this->age = $age;
        
        return $this;
    }
    
    
}