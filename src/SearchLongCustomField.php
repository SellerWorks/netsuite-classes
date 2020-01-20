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
 * SearchLongCustomField
 */
class SearchLongCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchLongFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "integer",
		"searchValue2" => "integer",
		"operator" => "SearchLongFieldOperator",
	);
}
