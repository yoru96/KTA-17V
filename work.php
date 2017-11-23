<?php

include 'functions.php';

back_home();

// array (workdays)

$myarr = array ('Esmaspäev',
                'Teisipäev',
                'Kolmapäev',
                'Neljapäev',
                'Reede');
$day = "reede";

# echo strtoupper($day)."<br>";

# var_dump($myarr);

for ($i = 0; $i < count($myarr); $i++){
    if (strtoupper($myarr[$i]) == strtoupper($day)){   
    echo "<strong>".$myarr[$i]." is is a workday</strong><br>";
    } elseif ($day == 'Laupäev' || $day == 'Pühapäev'){
        echo $day.' is "weekend"';
        die;
    }
}
$mat = "matemaatika";
$kem = "keemia";
$fys = "füüsika";

$grades = array("Peeter"=>array($mat => 5, $kem => 3, $fys => 3),
                "Ants"=>array($mat => 4, $kem => 4, $fys => 3),
                "Mari"=>array($mat => 5, $kem => 5, $fys => 4)              );

echo "Peetri hinne aines ".$mat." on ".$grades['Peeter'][$mat];
echo "<br>";
$grades_id = array_keys($grades);
# print_r($grades_id);

for ($i = 0; $i < count($grades_id); $i++){
    echo $grades_id[$i]."<br>";
    foreach($grades[$grades_id[$i]] as $predmet => $grade){
        echo $predmet." : ".$grade."<br>";
    }
}

?>