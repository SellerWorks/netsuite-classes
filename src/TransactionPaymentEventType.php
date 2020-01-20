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
 * TransactionPaymentEventType
 */
class TransactionPaymentEventType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _authorization = "_authorization";
	/**
	 * @var string
	 */
	const _captureAuthorization = "_captureAuthorization";
	/**
	 * @var string
	 */
	const _credit = "_credit";
	/**
	 * @var string
	 */
	const _overrideHold = "_overrideHold";
	/**
	 * @var string
	 */
	const _refreshAuthorization = "_refreshAuthorization";
	/**
	 * @var string
	 */
	const _refund = "_refund";
	/**
	 * @var string
	 */
	const _sale = "_sale";
	/**
	 * @var string
	 */
	const _voidAuthorization = "_voidAuthorization";
}
