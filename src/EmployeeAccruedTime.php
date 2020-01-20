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
 * EmployeeAccruedTime
 */
class EmployeeAccruedTime {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payrollItem;
	/**
	 * @access public
	 * @var float
	 */
	public $accruedHours;
	/**
	 * @access public
	 * @var float
	 */
	public $accrualRate;
	/**
	 * @access public
	 * @var float
	 */
	public $monetaryRate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $resetAccruedHoursAtYearEnd;
	/**
	 * @access public
	 * @var EmployeeAccruedTimeAccrualMethod
	 */
	public $accrualMethod;
	/**
	 * @access public
	 * @var float
	 */
	public $maximumAccruedHours;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inactive;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;

	static $paramtypesmap = array(
		"payrollItem" => "RecordRef",
		"accruedHours" => "float",
		"accrualRate" => "float",
		"monetaryRate" => "float",
		"resetAccruedHoursAtYearEnd" => "boolean",
		"accrualMethod" => "EmployeeAccruedTimeAccrualMethod",
		"maximumAccruedHours" => "float",
		"inactive" => "boolean",
		"effectiveDate" => "dateTime",
		"expirationDate" => "dateTime",
	);
}
