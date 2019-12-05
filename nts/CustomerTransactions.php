<?php


class CustomerTransactions
{
    private $deposit_amt;
    private $deposit_mode;
    private $bal_amt;

    public function __construct($deposit_amt, $deposit_mode, $bal_amt)
    {
        $this->deposit_amt = $deposit_amt;
        $this->deposit_mode = $deposit_mode;
        $this->bal_amt = $bal_amt;
    }

    public function get_deposit_amt()
    {
        return $this->deposit_amt;
    }

    public function set_deposit_amt($deposit_amt)
    {
        return $this->deposit_amt = $deposit_amt;
    }

    public function get_customer_deposit_mode()
    {
        return $this->deposit_mode;
    }

    public function set_customer_deposit_mode($deposit_mode)
    {
        return $this->deposit_mode = $deposit_mode;
    }

    public function get_customer_total_amt()
    {
        return $this->bal_amt;
    }

    public function set_customer_total_amt($total_amt)
    {
        return $this->bal_amt = $total_amt;
    }
}