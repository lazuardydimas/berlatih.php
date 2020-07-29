<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

function papan_catur($angka) {
    for( $i = 1 ; $i < $angka ; $i++){
        echo "<tr>";
            if ($i%2==0) {
                for($j=0;$j<$angka-1;$j++){
                    echo "<td> # </td>";
                }    
                }
        else{
            for($j=0;$j<$angka;$j++){
                echo "<td> # </td>";
                }
    }

        echo "</tr><br>";
        
    }

}

// TEST CASES
echo papan_catur(5) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

// echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>
</html>