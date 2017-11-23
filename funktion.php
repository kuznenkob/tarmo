<?php

back_home();

function back_home(){
    echo '<li><a href="html.php">Home</a><li>';
}

function menu(){
    $menu="workday, worka, funktion;";
    $menu=explode(", ",$menu);
    
    for($i=0;$i<count($menu);$i++){
        echo'<li><a href="'.$menu[$i].'.php">'.$menu[$i].'</a><li>';
    }
}

?>