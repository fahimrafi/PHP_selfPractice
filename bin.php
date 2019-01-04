<?php 


$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



$list = array(-150,-50,-40,-30,12,15,300,1000); 

fscanf(STDIN, "%d", $toFind);





  
function binSearch($list, $toFind, &$flag, &$key) 
{ 
    
    if (count($list) === 0) 
    {
        $flag=false;
    }    
    $low = 0; 
    $high = count($list) - 1; 
      
    while ($low <= $high) 
    { 
         
        
            $mid = floor(($low + $high) / 2);     
             
            if($list[$mid] == $toFind) 
            { 
                $flag=true;
                $key=$mid;
                break; 
            } 
  
            if ($toFind < $list[$mid]) 
            { 
                
                $high = $mid -1; 
                $flag=false;
            } 
            else 
            { 
                
                $low = $mid + 1; 
                $flag=false;
            }
            
            
    } 
      
    
          
} 
  


binSearch($list, $toFind, $flag, $key);

if($flag==true)
{
    echo "$toFind is found in index-position: $key \n";
}

else 
{
    echo "Your searched key is not found \n"; 
}    

   
