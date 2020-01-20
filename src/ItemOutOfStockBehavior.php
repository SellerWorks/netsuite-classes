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
 * ItemOutOfStockBehavior
 */
class ItemOutOfStockBehavior {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _allowBackOrdersButDisplayOutOfStockMessage = "_allowBackOrdersButDisplayOutOfStockMessage";
	/**
	 * @var string
	 */
	const _allowBackOrdersWithNoOutOfStockMessage = "_allowBackOrdersWithNoOutOfStockMessage";
	/**
	 * @var string
	 */
	const _default = "_default";
	/**
	 * @var string
	 */
	const _disallowBackOrdersButDisplayOutOfStockMessage = "_disallowBackOrdersButDisplayOutOfStockMessage";
	/**
	 * @var string
	 */
	const _removeItemWhenOutOfStock = "_removeItemWhenOutOfStock";
}
