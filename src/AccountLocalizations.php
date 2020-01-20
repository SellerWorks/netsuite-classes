<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * AccountLocalizations
 */
class AccountLocalizations {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accountingContext;
	/**
	 * @access public
	 * @var string
	 */
	public $acctNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $acctName;
	/**
	 * @access public
	 * @var string
	 */
	public $legalName;
	/**
	 * @access public
	 * @var Language
	 */
	public $locale;

	static $paramtypesmap = array(
		"accountingContext" => "RecordRef",
		"acctNumber" => "string",
		"acctName" => "string",
		"legalName" => "string",
		"locale" => "Language",
	);
}
