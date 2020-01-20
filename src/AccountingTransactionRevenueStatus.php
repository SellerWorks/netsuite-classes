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
 * AccountingTransactionRevenueStatus
 */
class AccountingTransactionRevenueStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _completed = "_completed";
	/**
	 * @var string
	 */
	const _inProgress = "_inProgress";
	/**
	 * @var string
	 */
	const _onRevCommitment = "_onRevCommitment";
	/**
	 * @var string
	 */
	const _pending = "_pending";
}
