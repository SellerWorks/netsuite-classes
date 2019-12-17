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
 * ListOrRecordRef
 */
class ListOrRecordRef {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
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
	/**
	 * @access public
	 * @var string
	 */
	public $typeId;

	static $paramtypesmap = array(
		"name" => "string",
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
	);
}
