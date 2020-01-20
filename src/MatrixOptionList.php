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
 * MatrixOptionList
 */
class MatrixOptionList {
	/**
	 * @access public
	 * @var SelectCustomFieldRef[]
	 */
	public $matrixOption;

	static $paramtypesmap = array(
		"matrixOption" => "SelectCustomFieldRef[]",
	);
}
