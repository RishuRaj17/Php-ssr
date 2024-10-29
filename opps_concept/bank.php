<html>
<head>
    <meta charset="UTF-8">
    <title>Bank Account</title>
</head>
<body>

    <h2>Bank Account Operations</h2>

    <form method="post">
        <label for="amount">Enter Amount:</label>
        <input type="number" id="amount" name="amount" required>
        <br><br>
        <button type="submit" name="action" value="deposit">Deposit</button>
        <button type="submit" name="action" value="withdraw">Withdraw</button>
    </form>

<?php

class BankAccount {
    private $accountNum = 12345;
    private $balance = 10000;

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Dear SBI Customer, Rs $amount has been credited to your account successfully.<br>";
        echo "The current available balance is: " . $this->balance . "<br>"; 
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Insufficient funds to withdraw Rs $amount.<br>";
        } else {
            $this->balance -= $amount;
            echo "Dear SBI Customer, Rs $amount has been debited from your account successfully.<br>";
            echo "The current available balance is: " . $this->balance . "<br>";
        }
    }

    public function getBalance() {
        echo "Available balance: " . $this->balance . " Rs ONLY!";
    }

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = (int)$_POST["amount"];
        $action = $_POST["action"];

        if ($action == "deposit") {
            $acc->deposit($amount);
        } elseif ($action == "withdraw") {
            $acc->withdraw($amount);
        }
    }
}

$acc = new BankAccount();
$acc->getBalance();

?>

</body>
</html>