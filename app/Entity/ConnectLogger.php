<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ConnectLogger extends Model
{
    const TYPE_VOICE = 'VOICE';
    const TYPE_SMS = 'SMS';

    protected $table = 'connect_logger';
    protected $id;
    protected $sid;
    protected $from;
    protected $to;
    protected $visitor;
    protected $type;
    protected $fillable = [
        'sid', 
        'from', 
        'to', 
        'visitor', 
        'type'
    ];
    
    public function getId()
    {
        return $this->id;
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
    
    public function getFrom()
    {
        return $this->from;
    }
    
    public function setFrom($fromNumber)
    {
        $this->from = $fromNumber;
        
        return $this;
    }
    
    public function getTo()
    {
        return $this->to;
    }
    
    public function setTo($toNumber)
    {
        $this->to = $toNumber;
        
        return $this;
    }
    
    public function getVisitor()
    {
        return $this->visitor;
    }
    
    public function setVisitor($visitor)
    {
        $this->visitor = $visitor;
        
        return $this;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function setType($type)
    {
        $this->type = $type;
        
        return $this;
    }
}

