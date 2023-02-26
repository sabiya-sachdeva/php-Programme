
<?php

/*Description: Php progrma to find less occurance of element in an array using associative array*/ 
$numarray=array(1,1,2,3,4,1,3,4);

function associative_array($numarray)//Convert normal array into associative array
{
$itemcountarray=[];
foreach($numarray as $value)
{
    if( $itemcountarray[$value])
    {
        $itemcountarray[$value]= $itemcountarray[$value]+1;
    }
    else{
        $itemcountarray[$value]=1;
    }
  
    echo"\n";

   
}



asort($itemcountarray);//sorting array based on value

print_r($itemcountarray);

$key_array=array_keys($itemcountarray);//extract key from associative array
print_r($key_array);
echo"smallest count of array is".$key_array[0];

}
associative_array($numarray);