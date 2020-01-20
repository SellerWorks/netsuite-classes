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
 * Term
 */
class Term extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var boolean
	 */
	public $dateDriven;
	/**
	 * @access public
	 * @var integer
	 */
	public $daysUntilNetDue;
	/**
	 * @access public
	 * @var float
	 */
	public $discountPercent;
	/**
	 * @access public
	 * @var integer
	 */
	public $daysUntilExpiry;
	/**
	 * @access public
	 * @var integer
	 */
	public $dayOfMonthNetDue;
	/**
	 * @access public
	 * @var integer
	 */
	public $dueNextMonthIfWithinDays;
	/**
	 * @access public
	 * @var float
	 */
	public $discountPercentDateDriven;
	/**
	 * @access public
	 * @var integer
	 */
	public $dayDiscountExpires;
	/**
	 * @access public
	 * @var boolean
	 */
	public $preferred;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $installment;
	/**
	 * @access public
	 * @var TermRecurrenceFrequency
	 */
	public $recurrenceFrequency;
	/**
	 * @access public
	 * @var integer
	 */
	public $recurrenceCount;
	/**
	 * @access public
	 * @var integer
	 */
	public $repeatEvery;
	/**
	 * @access public
	 * @var boolean
	 */
	public $splitEvenly;
	/**
	 * @access public
	 * @var TermPercentagesList
	 */
	public $percentagesList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"name" => "string",
		"dateDriven" => "boolean",
		"daysUntilNetDue" => "integer",
		"discountPercent" => "float",
		"daysUntilExpiry" => "integer",
		"dayOfMonthNetDue" => "integer",
		"dueNextMonthIfWithinDays" => "integer",
		"discountPercentDateDriven" => "float",
		"dayDiscountExpires" => "integer",
		"preferred" => "boolean",
		"isInactive" => "boolean",
		"installment" => "boolean",
		"recurrenceFrequency" => "TermRecurrenceFrequency",
		"recurrenceCount" => "integer",
		"repeatEvery" => "integer",
		"splitEvenly" => "boolean",
		"percentagesList" => "TermPercentagesList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
