<?php
# Convert from Arabic numeral
function cfan($n) {
  $n = str_replace('٠', '0', $n);
  $n = str_replace('١', '1', $n);
  $n = str_replace('٢', '2', $n);
  $n = str_replace('٣', '3', $n);
  $n = str_replace('٤', '4', $n);
  $n = str_replace('٥', '5', $n);
  $n = str_replace('٦', '6', $n);
  $n = str_replace('٧', '7', $n);
  $n = str_replace('٨', '8', $n);
  $n = str_replace('٩', '9', $n);
  return $n;
}