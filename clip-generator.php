<?php
for ($i = 100; $i >= 0; $i--) {
  $string .=  " ".$i."% ".(($i % 2) == 0 ? "80" : "100")."%,";
}

$string = "\n\n\n";

for ($i = 0; $i <= 100; $i++) {
  $string .=  " ".$i."% ".(($i % 2) == 0 ? "0" : "20")."%,";
}
echo $string;
?>