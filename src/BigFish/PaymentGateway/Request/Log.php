<?php
/**
 * BIG FISH Payment Gateway (https://www.paymentgateway.hu)
 * PHP SDK
 * 
 * @link https://github.com/bigfish-hu/payment-gateway-php-sdk.git
 * @copyright (c) 2015, BIG FISH Internet-technology Ltd. (http://bigfish.hu)
 */
namespace BigFish\PaymentGateway\Request;

/**
 * Log request class
 * 
 * @package PaymentGateway
 * @subpackage Request
 */
class Log extends RequestAbstract
{
	/**
	 * Transaction ID
	 * 
	 * @var string
	 * @access public
	 */
	public $transactionId;

	/**
	 * Construct new Log request instance
	 * 
	 * @param string $transactionId Transaction ID received from Payment Gateway
	 * @return void
	 * @access public
	 */
	public function __construct($transactionId)
	{
		$this->transactionId = $transactionId;
	}

}
