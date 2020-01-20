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
 * SearchDoubleCustomField
 */
class SearchDoubleCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDoubleFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "float",
		"searchValue2" => "float",
		"operator" => "SearchDoubleFieldOperator",
	);
}
