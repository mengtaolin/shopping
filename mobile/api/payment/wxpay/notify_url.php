<?php
/**
 * 微信支付通知地址
 *
 * 
 * @copyright  Copyright (c) 2007-2015 WrzcNet Inc. (http://www.helloworld.com)
 * @license    http://www.helloworld.com
 * @link       http://www.helloworld.com
 * @since      File available since Release v1.1
 */
//$postStr = file_get_contents("php://input");

$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'wxpay';

require_once(dirname(__FILE__).'/../../../index.php');
