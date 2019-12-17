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
 * TermSearchBasic
 */
class TermSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $dateDriven;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $dayDiscountExpires;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $dayOfMonthNetDue;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysUntilExpiry;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysUntilNetDue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $discountPercent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $discountPercentDateDriven;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $dueNextMonthIfWithinDays;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $installment;
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
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $preferred;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $recurrenceCount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $recurrenceFrequency;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $repeatEvery;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $splitEvenly;

	static $paramtypesmap = array(
		"dateDriven" => "SearchBooleanField",
		"dayDiscountExpires" => "SearchLongField",
		"dayOfMonthNetDue" => "SearchLongField",
		"daysUntilExpiry" => "SearchLongField",
		"daysUntilNetDue" => "SearchLongField",
		"discountPercent" => "SearchDoubleField",
		"discountPercentDateDriven" => "SearchDoubleField",
		"dueNextMonthIfWithinDays" => "SearchLongField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"installment" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"preferred" => "SearchBooleanField",
		"recurrenceCount" => "SearchLongField",
		"recurrenceFrequency" => "SearchEnumMultiSelectField",
		"repeatEvery" => "SearchLongField",
		"splitEvenly" => "SearchBooleanField",
	);
}
