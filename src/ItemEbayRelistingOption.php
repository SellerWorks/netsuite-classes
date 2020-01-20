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
 * ItemEbayRelistingOption
 */
class ItemEbayRelistingOption {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _doNotRelist = "_doNotRelist";
	/**
	 * @var string
	 */
	const _relistWhenItemExpires = "_relistWhenItemExpires";
	/**
	 * @var string
	 */
	const _relistWhenItemIsSold = "_relistWhenItemIsSold";
	/**
	 * @var string
	 */
	const _relistWhenItemIsSoldExpires = "_relistWhenItemIsSoldExpires";
}
