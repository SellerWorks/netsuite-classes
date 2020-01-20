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
 * ItemSupplyLotSizingMethod
 */
class ItemSupplyLotSizingMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fixedLotSize = "_fixedLotSize";
	/**
	 * @var string
	 */
	const _lotForLot = "_lotForLot";
	/**
	 * @var string
	 */
	const _periodsOfSupply = "_periodsOfSupply";
}
