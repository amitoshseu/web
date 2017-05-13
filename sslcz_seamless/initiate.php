<?php
# INITIATE THE PAYMENT
include_once "SSLCommerz.php";

# PROVIDE THE SITE URL where success, fail, cancel page resides
$site_url = "http://localhost/sslcz_seamless";

$post_data = array();

# REQUIRED FIELDS
$post_data['total_amount'] = "100";
$post_data['currency'] = "BDT";
$post_data['tran_id'] = uniqid();

	# RETURNING PAGES FOR STATUS - SUCCESS, FAIL, CANCEL
$post_data['success_url'] = $site_url."/complete.php";
$post_data['fail_url'] = $site_url."/complete.php";
$post_data['cancel_url'] = $site_url."/complete.php";

# CUSTOMER INFORMATION
	# SEMI REQUIRED - If not provided then SSLCommerz will ask to provide the customer
$post_data['cus_name'] = "Customer Name";
$post_data['cus_email'] = "cust@email.com";
$post_data['cus_phone'] = "01711111111";

	# OPTIONAL
$post_data['cus_add1'] = "Dhaka";
$post_data['cus_add2'] = "Dhaka";
$post_data['cus_city'] = "Dhaka";
$post_data['cus_state'] = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_fax'] = "01711111111";

# SHIPMENT INFORMATION - OPTIONAL
$post_data['ship_name'] = "Customer Name";
$post_data['ship_add1 '] = "Dhaka";
$post_data['ship_add2'] = "Dhaka";
$post_data['ship_city'] = "Dhaka";
$post_data['ship_state'] = "Dhaka";
$post_data['ship_postcode'] = "1000";
$post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
$post_data['value_a'] = "ref001";
$post_data['value_b'] = "ref002";
$post_data['value_c'] = "ref003";
$post_data['value_d'] = "ref004";

# SSLCommerz(STORE ID,STORE PASSWORD, SANDBOX MODE)
# Ex. SSLCommerz(STORE ID,STORE PASSWORD, 1), 1= Means to check in Sandbox and 0=Means to Check in Live
$sslc = new SSLCommerz();

# initiate(Transaction Data , Whether redirect or Display in Page)
$options = $sslc->initiate($post_data, true);

var_dump($options);