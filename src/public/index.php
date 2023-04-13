<?php
$num = [];
for($i = 1; $i <= 10; $i++) {
  $num[] += 1;
  $num[] = $i;
}
$totalNum = array_sum($num);
echo $totalNum . "\n";
