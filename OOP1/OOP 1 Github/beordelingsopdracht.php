<?php

class Bankaccount {
    public $balance;
    public $accountnummer;

    public function __construct($balance, $accountnummer) {
        $this->balance = $balance;
        $this->accountnummer = $accountnummer;
    }

    public function setAccountnummer($accountnummer) {
        $this->accountnummer = $accountnummer;
        return "Uw bankaccount nummer is gewijzigd in: " . $accountnummer;
    }

    public function getAccountnummer() {
        return "Uw bankaccount nummer is: " . $this->accountnummer;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getBalance() {
        return "Uw huidige saldo is: € " . number_format($this->balance, 2);
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return "U heeft € " . number_format($amount, 2) . " op uw bankaccount gezet. " . $this->getBalance();
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            return "U heeft onvoldoende saldo om € " . number_format($amount, 2) . " op te nemen.";
        } else {
            $this->balance -= $amount;
            return "U heeft € " . number_format($amount, 2) . " opgenomen. " . $this->getBalance();
        }
    }
}

// Example usage:
$account = new Bankaccount(50.00, 123456);

echo $account->getAccountnummer() . "<br>";
echo $account->getBalance() . "<br>";
echo $account->withdraw(13.75) . "<br>";
echo $account->deposit(25.50) . "<br>";
echo $account->withdraw(100) . "<br>";
echo $account->setAccountnummer(98765) . "<br>";
?>
