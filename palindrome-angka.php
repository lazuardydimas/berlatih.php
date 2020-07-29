<!DOCTYPE html>
<html>
<head>
<title> palindrome_angka</title>
</head>
<body>
<?php

function palindrome_angka($angka) {
  $ang=(string)$angka;
  $revstr=strrev($ang);
  $revint=(int)$revstr;
  if($revint == $angka || $angka >1 && $angka<8){
      $angka++;
      return $angka;
  }
  else {
    while ($angka !== $revint &&  palindrome_angka($angka) == false) {
        $angka++;
        }

    }
  
}


echo palindrome_angka(153);

// TEST CASES
// echo palindrome_angka(8); // 9
// echo palindrome_angka(10); // 11
// echo palindrome_angka(117); // 121
// echo palindrome_angka(175); // 181
// echo palindrome_angka(1000); // 1001

?>
</body>
</html>