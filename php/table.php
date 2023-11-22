<?php
$emp=[[1,"krishna","manager",100000],[2,"Salman","Salesman",20000],[3,"Mohan","Postman",10000]];
echo "<table border=1px cellpeding='5px' cellspacing='0px'>
<tr><th>S.NO</th>
<th>Student</th>
<th>Designation</th>
<th>Salary</th> </tr>";
    foreach($emp as list($id,$name,$des,$sal))
    {
        echo "<tr> <td>$id</td> <td>$name</td> <td>$des</td> <td>$sal</td>";
    }
    echo "</table>";
?>