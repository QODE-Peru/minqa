<?php

include_once("Fw/config.php");

$res = $sql->query("SELECT * FROM `mq_inversion` ORDER BY `inv_id` DESC;"); 
while($row = $sql->array_result($res)) 
{ 
    echo($row['spalte']."<br />\n"); 
} 