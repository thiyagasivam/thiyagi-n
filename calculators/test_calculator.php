<?php
// Test the AJAX functionality directly
$_GET['ajax'] = '1';
$_GET['principal'] = '150000';
$_GET['rate'] = '11';
$_GET['tenure'] = '36';

// Include the main file to test
ob_start();
include 'two-wheeler-loan-emi-calculator.php';
$output = ob_get_clean();

echo "AJAX Output:\n";
echo $output;
?>