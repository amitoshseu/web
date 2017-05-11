<?php
function generate_numbers($start, $count, $digits) {
   $result = array();
   for ($n = $start; $n < $start + $count; $n++) {
 
      $result[] = str_pad($n, $digits, "0", STR_PAD_LEFT);
 
   }
   return $result;
}
$numbers = generate_numbers(9992, 20, 10);
echo $numbers;
?>
