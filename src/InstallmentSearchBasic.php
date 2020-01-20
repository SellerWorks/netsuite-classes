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
 * InstallmentSearchBasic
 */
class InstallmentSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountPaid;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxAmountPaid;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxAmountRemaining;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $installmentNumber;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amount" => "SearchDoubleField",
		"amountPaid" => "SearchDoubleField",
		"amountRemaining" => "SearchDoubleField",
		"daysOverdue" => "SearchLongField",
		"dueDate" => "SearchDateField",
		"fxAmount" => "SearchDoubleField",
		"fxAmountPaid" => "SearchDoubleField",
		"fxAmountRemaining" => "SearchDoubleField",
		"installmentNumber" => "SearchLongField",
		"customFieldList" => "SearchCustomFieldList",
	);
}
