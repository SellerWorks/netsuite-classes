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
 * BillingScheduleRecurrence
 */
class BillingScheduleRecurrence {
	/**
	 * @access public
	 * @var integer
	 */
	public $recurrenceId;
	/**
	 * @access public
	 * @var integer
	 */
	public $count;
	/**
	 * @access public
	 * @var BillingScheduleRecurrenceRecurrenceUnits
	 */
	public $units;
	/**
	 * @access public
	 * @var boolean
	 */
	public $relativeToPrevious;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $recurrenceDate;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $paymentTerms;

	static $paramtypesmap = array(
		"recurrenceId" => "integer",
		"count" => "integer",
		"units" => "BillingScheduleRecurrenceRecurrenceUnits",
		"relativeToPrevious" => "boolean",
		"recurrenceDate" => "dateTime",
		"amount" => "float",
		"paymentTerms" => "RecordRef",
	);
}
