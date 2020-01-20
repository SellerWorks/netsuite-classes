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
 * StatisticalJournalEntryLine
 */
class StatisticalJournalEntryLine {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $scheduleNum;
	/**
	 * @access public
	 * @var float
	 */
	public $debit;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $lineUnit;
	/**
	 * @access public
	 * @var string
	 */
	public $previewDebit;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "RecordRef",
		"line" => "integer",
		"location" => "RecordRef",
		"scheduleNum" => "RecordRef",
		"debit" => "float",
		"memo" => "string",
		"entity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"lineUnit" => "RecordRef",
		"previewDebit" => "string",
		"customFieldList" => "CustomFieldList",
	);
}
