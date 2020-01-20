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
 * SearchMultiSelectField
 */
class SearchMultiSelectField {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchMultiSelectFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "RecordRef[]",
		"operator" => "SearchMultiSelectFieldOperator",
	);
}
