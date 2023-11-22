<?php
$a=[[1,"krishna","manager",50000],[2,"Salman","Salesman",20000],[3,"Mohan","Computer","120000"]];
echo "<table border='1px>";
foreach($a as $v1)
{
    echo "<tr>";
    foreach($v1 as $v2)
    {
        echo $v2." ";
    }
    echo "</tr>";
    
}
echo "</table>";
?>