<?php

    echo "\n\n";
    

    function substring(string $text, int $index, int $length) : string
    {
        $result= "";
        
        for($i=$index+1 ; $i< $index + $length ; $i++)
        {
            $result .= $text[$i];
        }
            
            
        return  $result;
        
    }
    
    function Mystrlen(string $text) :int 
    {
        $length= 0;
        
        for($i=0; isset($text[$i]); $i++)
        {
            $length++;
        }
        
        return $length;
        
    }
    
    
   // echo  $exampl= substring("lukasz",1,3);
   
    
    
   
    
    //var_dump($exampl);
    
    
    

?>