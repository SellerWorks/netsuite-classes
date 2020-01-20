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
 * ManufacturingOperationTaskSearch
 */
class ManufacturingOperationTaskSearch extends SearchRecord {
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchBasic
	 */
	public $basic;
	/**
	 * @access public
	 * @var ManufacturingOperationTaskSearchBasic
	 */
	public $predecessorJoin;
	/**
	 * @access public
	 * @var EmployeeSearchBasic
	 */
	public $userJoin;
	/**
	 * @access public
	 * @var TransactionSearchBasic
	 */
	public $workOrderJoin;
	/**
	 * @access public
	 * @var CustomSearchJoin[]
	 */
	public $customSearchJoin;

	static $paramtypesmap = array(
		"basic" => "ManufacturingOperationTaskSearchBasic",
		"predecessorJoin" => "ManufacturingOperationTaskSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"workOrderJoin" => "TransactionSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}
