<?php
# Convert to Arabic numeral
function c2an ($n) {
  $n = str_replace('0', '٠', $n);
  $n = str_replace('1', '١', $n);
  $n = str_replace('2', '٢', $n);
  $n = str_replace('3', '٣', $n);
  $n = str_replace('4', '٤', $n);
  $n = str_replace('5', '٥', $n);
  $n = str_replace('6', '٦', $n);
  $n = str_replace('7', '٧', $n);
  $n = str_replace('8', '٨', $n);
  $n = str_replace('9', '٩', $n);
  return $n;
}