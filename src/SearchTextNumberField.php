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
 * SearchTextNumberField
 */
class SearchTextNumberField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchTextNumberFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string",
		"searchValue2" => "string",
		"operator" => "SearchTextNumberFieldOperator",
	);
}
