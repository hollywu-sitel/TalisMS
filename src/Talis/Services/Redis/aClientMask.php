<?php namespace Talis\Services\Redis;

abstract class aClientMask{
    /**
     * @var Client
     */
    protected $r;
    public function __construct(Client $r){
        $this->r = $r;
    }
    
    public function expire(int $seconds){
        $this->r->expire($seconds);
    }
    
    public function pexpire(int $milliseconds){
        $this->r->pexpire($milliseconds);    
    }
    
    public function del(){
        return $this->r->del();
    }
    
    /**
     * @return int TTL in seconds
     */
    public function ttl():int{
        return $this->r->ttl();
    }
    
    /**
     * @return int TTL in milliseconds,
     */
    public function pttl():int{
        return $this->r->pttl();
    }
    
    /**
     * Redis object type 
     * @return string
     */
    public function type():string{
        return $this->r->type();
    }
    
}