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
 * GetSelectFilterByFieldValue
 */
class GetSelectFilterByFieldValue {
	/**
	 * @access public
	 * @var string
	 */
	public $sublist;
	/**
	 * @access public
	 * @var string
	 */
	public $field;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"sublist" => "string",
		"field" => "string",
		"internalId" => "string",
	);
}
