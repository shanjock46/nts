<?php
require_once('src/Customer.php');

$cust1 = new Customer('Shantha', '101');
$cust1->deposit_cash('1000', 'cashier');
$cust1->display_customer();
$cust1->deposit_cash('3000', 'ATM');
$cust1->display_customer();