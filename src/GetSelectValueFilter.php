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
 * GetSelectValueFilter
 */
class GetSelectValueFilter {
	/**
	 * @access public
	 * @var string
	 */
	public $filterValue;
	/**
	 * @access public
	 * @var GetSelectValueFilterOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"filterValue" => "string",
		"operator" => "GetSelectValueFilterOperator",
	);
}
