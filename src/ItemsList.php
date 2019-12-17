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
 * ItemsList
 */
class ItemsList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $items;

	static $paramtypesmap = array(
		"items" => "RecordRef[]",
	);
}
