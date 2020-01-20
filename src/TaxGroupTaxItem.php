<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * TaxGroupTaxItem
 */
class TaxGroupTaxItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxName;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var float
	 */
	public $basis;
	/**
	 * @access public
	 * @var string
	 */
	public $taxType;

	static $paramtypesmap = array(
		"taxName" => "RecordRef",
		"rate" => "float",
		"basis" => "float",
		"taxType" => "string",
	);
}
