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
 * ChargeStage
 */
class ChargeStage {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _hold = "_hold";
	/**
	 * @var string
	 */
	const _nonBillable = "_nonBillable";
	/**
	 * @var string
	 */
	const _processed = "_processed";
	/**
	 * @var string
	 */
	const _ready = "_ready";
}
