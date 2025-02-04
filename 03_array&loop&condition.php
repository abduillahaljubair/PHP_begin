<?php

$people=array("Abdullah","al","juabir");
echo $people[0] . PHP_EOL;

echo $people[1]. "\n";

$cars=['honda','hero','ford'];
$cars[3]="toyota";
$cars[]="BMW";
echo count($cars)."\n";
print_r($cars);
var_dump($cars);

$people=array('fahim'=>23,'jubair'=>24,'Redo'=>25);
echo $people["fahim"]."\n";
echo $people["jubair"].PHP_EOL;
$id=array(23=>"abd",24=>"jaka",25=>'rubi');
echo $id[25];
print_r($id);
$php=array(
    array(2,3,4),
    array(4,5,6),
    array(7,8,9),
);
echo $php[1][0]."\n";
$php=[[1,2,3],[4,5,6],[7,8,9]];
echo $php[0][2]."\n";

for ($i = 0; $i < count($php); $i++) { // Use count() instead of php.length
    for ($j = 0; $j < count($php[$i]); $j++) { // Use count() instead of php.size()
        echo $php[$i][$j] . " "; // Correct array indexing
    }
    echo "\n"; // Use double quotes for newline
}

$i=1;
while($i<=10)
{
  echo $i."*".$i;
  echo "=".$i*$i;
  echo PHP_EOL; 
  $i++;
}

echo PHP_EOL;
echo PHP_EOL;

$people=array("Abdullah","al","juabir");
foreach ($people as $person) {
    echo $person;
    echo PHP_EOL;
}


echo PHP_EOL;
echo PHP_EOL;  


$morePeople = array(
    'Fahim' => 'fahimbinamin@gmail.com',
    'Jose' => 'jose@gmail.com',
    'William' => 'will@gmail.com'
);

foreach ($morePeople as $singlePeople => $email) {
    echo $singlePeople . ' : ' . $email;
    echo "\n";
}

$id=array(23=>"abd",24=>"jaka",25=>'rubi');
foreach($id as $code=>$name)
{
    echo $name."=".$code;
    echo PHP_EOL;
}
?>