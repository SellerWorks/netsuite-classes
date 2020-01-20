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
 * CampaignStatus
 */
class CampaignStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _closed = "_closed";
	/**
	 * @var string
	 */
	const _completed = "_completed";
	/**
	 * @var string
	 */
	const _execute = "_execute";
	/**
	 * @var string
	 */
	const _inProgress = "_inProgress";
	/**
	 * @var string
	 */
	const _scheduled = "_scheduled";
	/**
	 * @var string
	 */
	const _sent = "_sent";
	/**
	 * @var string
	 */
	const _toPrint = "_toPrint";
}
