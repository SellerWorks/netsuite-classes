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
 * PricingSearchRowBasic
 */
class PricingSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $maximumQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $quantityRange;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $saleUnit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitPrice;

	static $paramtypesmap = array(
		"currency" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"maximumQuantity" => "SearchColumnDoubleField[]",
		"minimumQuantity" => "SearchColumnDoubleField[]",
		"priceLevel" => "SearchColumnSelectField[]",
		"quantityRange" => "SearchColumnStringField[]",
		"saleUnit" => "SearchColumnSelectField[]",
		"unitPrice" => "SearchColumnDoubleField[]",
	);
}
