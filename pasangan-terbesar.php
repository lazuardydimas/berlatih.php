<?php
$pair= [];
function pasangan_terbesar($angka){
$ang =(string)$angka;
explode('',$ang,3);
for($i=0;$i<count($ang)-1;$i++){
    if($i===0) $pair= $ang[$i]+ $ang[$i+1];
    if($pair< (int)$ang[$i]+$ang[$i+1]) $pair= (int)$ang[i]+ $ang[$i+1];
}
 return (int)$pair;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>