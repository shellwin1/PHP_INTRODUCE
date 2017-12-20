<?php

    $testStrlenValues= array(
        array('natalia',2,4),
        array('przyklad strlen',1,7)
    );
    
    $testElement= array('Directory' =>'Array', 'File' =>'Syntax.php','srlen' => 'substring',
                        'substr'=>'Mystrlen'
    );
    
    echo set_include_path(get_include_path(). PATH_SEPARATOR.'../');
    
    
    
    
    foreach ($testElement as $key => $value)
    {
      echo require_once ($value['Directory'].'/'.$value['File'] );
        
        
    }
     // 45 min
    
?>