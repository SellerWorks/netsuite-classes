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
 * InitializeRef
 */
class InitializeRef extends BaseRef {
	/**
	 * @access public
	 * @var InitializeRefType
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"type" => "InitializeRefType",
		"internalId" => "string",
		"externalId" => "string",
	);
}
