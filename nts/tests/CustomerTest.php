<?php
declare(strict_types=1);
require_once('Customer.php');

use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{

    public function testDeposit_cash()
    {
        $cust1 = new Customer('Shantha', '101');
        $cust1->deposit_cash('1000', 'cashier');
        $cust_trans_count = count($cust1->get_customer_transaction());
        $this->assertEquals(1, $cust_trans_count, "One transaction are there for customer: ". $cust1->get_customer_name());

        $cust1->deposit_cash('3000', 'ATM');
        $this->assertEquals(2, $cust_trans_count, "two transaction are there for customer: ". $cust1->get_customer_name());
    }
}
