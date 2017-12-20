<?php
    
     class IamStatic // cant create static class??
    {
        static function Test()
        {
            echo 'dupa   ds ';
            //$this->niestatyczna();
        }
        
        function niestatyczna()
        {
            echo 'niestatyczne';
        }
    }
    //->
    IamStatic::Test();
    
    $test = new IamStatic();
    
    $test::Test();
    
    $test::niestatyczna();
    
   