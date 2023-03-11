<?php

namespace OwaisAzam\StarterPackage;

class StarterPackage
{

    private $data; 
    
    public function __construct(){

        // self::$data = $data;
    }


    public function array_to_string(array $array){

        return implode(',',$array);
    }


    

}
?>