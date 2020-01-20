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
 * CustomFieldType
 */
class CustomFieldType extends Record {
	/**
	 * @access public
	 * @var CustomizationFieldType
	 */
	public $fieldType;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"fieldType" => "CustomizationFieldType",
		"scriptId" => "string",
	);
}
