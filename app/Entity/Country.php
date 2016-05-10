<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $id;
    protected $name;
    protected $iso;
    
    public function numbers()
    {
        return $this->hasOne('App\Entity\Number');
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getIso()
    {
        return $this->iso;
    }
    
    public function setIso($iso)
    {
        $this->iso = $iso;
        
        return $this;
    }
}
