<?php
//set_include_path('../home/shellwin1/Documents/PHP_TASKS/IntelientBuilidingCommunication/');
//require_once '/Base/Operations.php';


    class FIleParser
    {
        
        private $filePath;
        
        //public function _construct(string $path)
        //{
            
            //$this->filePath = $path;
          
            
        //}
        
        public function openFile()
        {
            $inc=0;
            
            
            
            $file = fopen("dane.txt", "r") or exit("Unable to open file!");
            
            // output lines of text file to array side by side
            while(!feof($file))
            { 
                if($file != "")
                {
                $dane[$inc] =fgets($file);
                }
                
                $inc++;
            }
            
            unset($dane[$inc-1]);
            
            return $dane;
            
            fclose($file);
            
        }
        
        public function arrayOperation()
        {
            // creating array with variables 
            $array=  $this->openFile();
            
            
            foreach ($array as $value)
            {
                $sd=0;
                $value;
                
                list(
                    $DeviceName,
                    $HomeAddress,
                    $OperationType,
                    $OperationHour,
                    $OperationTime,
                    $OperationEnergyUsage,
                    $OperationExtraInfo,
                    $OperationErrors
                     
                    ) = explode(" ", $value);
                
                    
                    $operation[$sd]= array($DeviceName, $HomeAddress, $OperationType,
                                           $OperationHour,$OperationTime,
                                           $OperationEnergyUsage,
                                           $OperationExtraInfo, $OperationErrors
                    );
                    
                    ;
                    $sd++;
                
                
            }
            
            return $operation;
            
            
            
        }
        
        
        
        
        
        
        
       
    }
    
    

// $test= new FIleParser();
    
   //$file= $test->openFile();
   
   //var_dump($file);
   
 
   
   
   
   
        
    