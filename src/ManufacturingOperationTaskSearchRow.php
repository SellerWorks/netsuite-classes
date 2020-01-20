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
 * ManufacturingOperationTaskSearchRow
 */
class ManufacturingOperationTaskSearchRow extends SearchRow {
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchRowBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchRowBasic
	 */
	public $predecessorJoin;
	/**
	 * @access public
	 * @var EmployeeSearchRowBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var TransactionSearchRowBasic
	 */
	public $workOrderJoin;
	/**
	 * @access public
	 * @var CustomSearchRowBasic[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ManufacturingOperationTaskSearchRowBasic",
		"predecessorJoin" => "ManufacturingOperationTaskSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"workOrderJoin" => "TransactionSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}
