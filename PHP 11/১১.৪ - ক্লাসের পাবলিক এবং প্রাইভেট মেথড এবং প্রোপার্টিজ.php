<?php
class Fund {
//    public $fund;
    protected $fund;

    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }
//    public function deductFund($money){
    protected function deductFund($money){
        $this->fund -= $money;
    }
    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
//$ourFund->fund = 70;
$ourFund->getTotal();
$ourFund->addFund(100);
//$ourFund->deductFund(1);
$ourFund->getTotal();