
<?php

include 'finediff.php';
$from_text = "01234567890"; //this data must be saved in db
$to_text = "10203040506070809";
$opcodes = FineDiff::getDiffOpcodes($from_text, $to_text); //this data must be saved in db

echo $opcodes;
