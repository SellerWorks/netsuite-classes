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
 * PricingSearchBasic
 */
class PricingSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $assignedPriceLevel;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $maximumQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rate;

	static $paramtypesmap = array(
		"assignedPriceLevel" => "SearchBooleanField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"maximumQuantity" => "SearchDoubleField",
		"minimumQuantity" => "SearchDoubleField",
		"priceLevel" => "SearchMultiSelectField",
		"rate" => "SearchDoubleField",
	);
}
