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
 * getSelectValueRequest
 */
class getSelectValueRequest {
	/**
	 * @access public
	 * @var GetSelectValueFieldDescription
	 */
	public $fieldDescription;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"fieldDescription" => "GetSelectValueFieldDescription",
		"pageIndex" => "integer",
	);
}
