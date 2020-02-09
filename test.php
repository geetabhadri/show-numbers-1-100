<?php
 
 for($i=1;$i<=100;$i++){
    $val = ($i%3 == 0 && $i%5 == 0) ? "Linianos" :
        (($i%3 == 0) ? "Linio" :($i%5 == 0 ? "IT" :$i)) ;
    echo $val."<br/>";
 }

?>
