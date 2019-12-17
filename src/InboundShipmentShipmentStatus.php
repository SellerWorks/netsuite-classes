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
 * InboundShipmentShipmentStatus
 */
class InboundShipmentShipmentStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _closed = "_closed";
	/**
	 * @var string
	 */
	const _inTransit = "_inTransit";
	/**
	 * @var string
	 */
	const _partiallyReceived = "_partiallyReceived";
	/**
	 * @var string
	 */
	const _received = "_received";
	/**
	 * @var string
	 */
	const _toBeShipped = "_toBeShipped";
}
