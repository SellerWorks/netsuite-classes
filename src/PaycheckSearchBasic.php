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
 * PaycheckSearchBasic
 */
class PaycheckSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $batchNumber;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $checkDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employee;
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
	public $hasGLImpact;
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
	public $payrollItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payrollItemType;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"batchNumber" => "SearchLongField",
		"checkDate" => "SearchDateField",
		"employee" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"hasGLImpact" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"payrollItem" => "SearchMultiSelectField",
		"payrollItemType" => "SearchMultiSelectField",
	);
}
