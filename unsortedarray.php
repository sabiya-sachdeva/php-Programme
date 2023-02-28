<?php // To remove duplicates from the unsorted array
$unsorted_array=array(50,62,62,12,14,6,18,2);
sort($unsorted_array);
$unique_array=array();
for($i=0;$i<count($unsorted_array);$i++) //using for loop
{
    if($unsorted_array[$i]!=$unsorted_array[$i-1])
    {
      $unique_array[]=$unsorted_array[$i];
    
    }
  
}
print_r ($unique_array);



