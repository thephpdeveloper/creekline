<?php
namespace Creekline;

class MockProcess {
    
    private $cmd;
    
    public function __construct($cmd){
        $this->cmd = $cmd;
    }
    
    public function run(){
        return 0;
    }
    
    public function getOutput(){
        return "";
    }
    
}