<?php

require_once('index.php');
$sql="select *from employees ";

$output= $conn-> query($sql);

if($output-> num_rows>0){
    while($row=$output->fetch_assoc())
    {
        echo $row['name'];
    }
    
}

?>