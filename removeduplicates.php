<?php // To remove duplicates from the sorted array
$sorted_array=array(10,12,12,14,16,18,20);
$unique_array=array();
for($i=0;$i<count($sorted_array);$i++) //using for loop
{
    if($sorted_array[$i]!=$sorted_array[$i-1])
    {
      $unique_array[]=$sorted_array[$i];
    
    }
  
}
print_r ($unique_array);


foreach($sorted_array as $val)//using for each loop
{
    if($sorted_array[$val]!=$sorted_array[$val-1])
    {
      $unique_array[]=$sorted_array[$val];
    
    }
  
}
print_r ($unique_array);

