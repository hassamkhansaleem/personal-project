<?php

/**
 * Ensures that the module init file can't be accessed directly, only within the application.
 */
defined('BASEPATH') or exit('No direct script access allowed');
/*
Module Name: Paystack
Description: Paystack module for invoice payment.
Author: Boxvibe Technologies 
Author URI: https://www.boxvibe.com
Version: 1.0.0
Requires at least: 2.3.*
*/
require(__DIR__ . '/vendor/autoload.php');
register_payment_gateway('paystack_gateway', 'paystack');
