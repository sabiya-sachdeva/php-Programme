<?php

function abc($n)
{
    while($n>1)
    {
if($n%2==0)
{
    echo"even";
    $n=$n/2;
    echo$n;

}
else{
    echo"odd";
    $n=$n*3+1;
    echo$n;

}
}
}
abc(12);
?>