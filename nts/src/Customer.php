<?php
declare(strict_types=1);
require_once('CustomerTransactions.php');

class Customer
{
    private $name;
    private $acc_id;
    private $transaction;
    private $total_amt;

    public function __construct($name, $acc_id)
    {
        $this->name = $name;
        $this->acc_id = $acc_id;
        $this->transaction = array();
        $this->total_amt = 0;
    }

    public function get_customer_name()
    {
        return $this->name;
    }

    public function set_customer_name($name)
    {
        return $this->name = $name;
    }

    public function get_customer_acc_id()
    {
        return $this->acc_id;
    }

    public function set_customer_acc_id($acc_id)
    {
        return $this->acc_id = $acc_id;
    }

    public function get_customer_total_amt()
    {
        return $this->total_amt;
    }

    public function set_customer_total_amt($total_amt)
    {
        return $this->total_amt = $total_amt;
    }

    public function get_customer_transaction()
    {
        return $this->transaction;
    }

    public function deposit_cash($deposit_amt, $deposit_mode)
    {
        error_log('$this->total_amt: '. print_r($this->total_amt, true));
        $this->total_amt = $this->total_amt + $deposit_amt;
        error_log('$this->total_amtnew: '. print_r($this->total_amt, true));
        $new_transaction = new CustomerTransactions($deposit_amt, $deposit_mode, $this->total_amt);
        array_push($this->transaction, $new_transaction);
    }

    public function withdraw_cash($deposit_amt, $deposit_mode)
    {
        error_log('$this->total_amt with: '. print_r($this->total_amt, true));
        $this->total_amt = $this->total_amt - $deposit_amt;
        error_log('$this->total_amt new with: '. print_r($this->total_amt, true));
        $new_transaction = new CustomerTransactions($deposit_amt, $deposit_mode, $this->total_amt);
        array_push($this->transaction, $new_transaction);
    }

    public function display_customer()
    {
        echo '<pre>';
        var_dump($this);
        echo '</prev>';
    }
}