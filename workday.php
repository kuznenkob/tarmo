<?php
//array (workdays)

$myarr=array('Esmaspaev','teisipaev','kolmapaev','neljapaev','reede');
$day="reede";

echo strtoupper($day)."<br>";

var_dump($myarr);


for ($i=0;$i<count($myarr);$i++){
    if(strtoupper($myarr[$i])==strtoupper($day)){
        echo"<strong>".$myarr[$i]." Is in array<br>";
    }elseif ($day=='Laupaev'||$day=='puhapaev'){
        echo"$day is weekend";
        die;
    }

    
}
$mat="matematika";
$kem="himija";
$fys="fizika";



$grades=array("Peeter"=>array($mat=>5,$kem=>3,$fys=>3),
             "Mary"=>array($mat=>4,$kem=>4,$fys=>3),
             "Garry"=>array($mat=>5,$kem=>5,$fys=>4));

echo"Peeter ocenka ".$mat." on ".$grades['Peeter'][$mat];

$grades_id=array_keys($grades);
//print_r($grades_id);

for($i=0;$i<count($grades_id);$i++){
    echo $grades_id[$i]."<br>";
    foreach($grades[$grades_id[$i]] as $predmet=>$grade){
        echo $predmet." : ".$grade."<br>";
    }
    
}


?>