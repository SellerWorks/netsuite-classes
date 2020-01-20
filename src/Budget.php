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
 * Budget
 */
class Budget extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $year;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var BudgetBudgetType
	 */
	public $budgetType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount1;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount2;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount3;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount4;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount5;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount6;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount7;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount8;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount9;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount10;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount11;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount12;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount13;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount14;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount15;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount16;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount17;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount18;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount19;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount20;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount21;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount22;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount23;
	/**
	 * @access public
	 * @var float
	 */
	public $periodAmount24;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"year" => "RecordRef",
		"customer" => "RecordRef",
		"item" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"account" => "RecordRef",
		"subsidiary" => "RecordRef",
		"category" => "RecordRef",
		"budgetType" => "BudgetBudgetType",
		"currency" => "RecordRef",
		"periodAmount1" => "float",
		"periodAmount2" => "float",
		"periodAmount3" => "float",
		"periodAmount4" => "float",
		"periodAmount5" => "float",
		"periodAmount6" => "float",
		"periodAmount7" => "float",
		"periodAmount8" => "float",
		"periodAmount9" => "float",
		"periodAmount10" => "float",
		"periodAmount11" => "float",
		"periodAmount12" => "float",
		"periodAmount13" => "float",
		"periodAmount14" => "float",
		"periodAmount15" => "float",
		"periodAmount16" => "float",
		"periodAmount17" => "float",
		"periodAmount18" => "float",
		"periodAmount19" => "float",
		"periodAmount20" => "float",
		"periodAmount21" => "float",
		"periodAmount22" => "float",
		"periodAmount23" => "float",
		"periodAmount24" => "float",
		"amount" => "float",
		"accountingBook" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
	);
}
