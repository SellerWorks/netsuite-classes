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
 * InterCompanyTransferOrderItemList
 */
class InterCompanyTransferOrderItemList {
	/**
	 * @access public
	 * @var InterCompanyTransferOrderItem[]
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"item" => "InterCompanyTransferOrderItem[]",
		"replaceAll" => "boolean",
	);
}
