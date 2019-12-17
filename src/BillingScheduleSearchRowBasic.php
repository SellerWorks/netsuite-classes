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
 * BillingScheduleSearchRowBasic
 */
class BillingScheduleSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $applyToSubtotal;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $frequency;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $inArrears;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $initialAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $initialTerms;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $recurrenceCount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $recurrencePattern;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $recurrenceTerms;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $repeatEvery;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $type;

	static $paramtypesmap = array(
		"applyToSubtotal" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnSelectField[]",
		"frequency" => "SearchColumnEnumSelectField[]",
		"inArrears" => "SearchColumnBooleanField[]",
		"initialAmount" => "SearchColumnStringField[]",
		"initialTerms" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPublic" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"recurrenceCount" => "SearchColumnLongField[]",
		"recurrencePattern" => "SearchColumnEnumSelectField[]",
		"recurrenceTerms" => "SearchColumnStringField[]",
		"repeatEvery" => "SearchColumnLongField[]",
		"type" => "SearchColumnEnumSelectField[]",
	);
}
