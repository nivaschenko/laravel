<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $table = 'numbers';
    protected $id;
    protected $country_id;
    protected $number;
    protected $sid;
    protected $fillable = ['country_id', 'number', 'sid'];
    
    public function countries()
    {
        return $this->belongsTo('App\Entity\Country');
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNumber()
    {
        return $this->number;
    }
    
    public function setNumber($number)
    {
        $this->number = $number;
        
        return $this;
    }
    
    public function getSid()
    {
        return $this->sid;
    }
    
    public function setSid($sid)
    {
        $this->sid = $sid;
        
        return $this;
    }
}

