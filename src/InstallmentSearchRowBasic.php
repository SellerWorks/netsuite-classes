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
 * InstallmentSearchRowBasic
 */
class InstallmentSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amountPaid;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxAmountPaid;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxAmountRemaining;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $installmentNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amount" => "SearchColumnDoubleField[]",
		"amountPaid" => "SearchColumnDoubleField[]",
		"amountRemaining" => "SearchColumnDoubleField[]",
		"daysOverdue" => "SearchColumnLongField[]",
		"dueDate" => "SearchColumnDateField[]",
		"fxAmount" => "SearchColumnDoubleField[]",
		"fxAmountPaid" => "SearchColumnDoubleField[]",
		"fxAmountRemaining" => "SearchColumnDoubleField[]",
		"installmentNumber" => "SearchColumnLongField[]",
		"status" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
