<?php
# RETURN PAGE FROM SSLCOMMERZ
include_once "SSLCommerz.php";

# SSLCommerz(STORE ID,STORE PASSWORD, SANDBOX MODE)
# Ex. SSLCommerz(STORE ID,STORE PASSWORD, 1), 1= Means to check in Sandbox and 0=Means to Check in Live
$sslc = new SSLCommerz();

# PASS THE TRANSACTION ID , AMOUNT, CURRENCY TYPE FROM YOUR SYSTEM (NOT WHICH ARE RETURNED BY SSLCOMMERZ)
$validation = $sslc->orderValidate($transaction_id, $amount, $currency, $_POST);

# EXAMPLE TO TEST
$validation = $sslc->orderValidate($_POST['tran_id'], $_POST['amount'], $_POST['currency_type'], $_POST);


# ORDER IS VALID, NOW CHECK FOR SUCCESS FAIL AND CANCEL
var_dump($validation);

# POST DATA
echo "<br> POST DATA  -------------------- <br>";
var_dump($_POST);

if($_POST['status'] == 'VALID'){
	# SUCCESS REQUEST
	# STEPS - check for transaction in db, validate if status is not success and then update as success
}
elseif($_POST['status'] == 'FAILED'){
	# FAILED REQUEST
	# STEPS - check for transaction in db, check if status is already success then ignore or update as failed.
}
elseif($_POST['status'] == 'CANCELED'){
	# CANCEL REQUEST
	# STEPS - check for transaction in db, check if status is not success and then update as cancel
}