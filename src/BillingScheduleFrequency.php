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
 * BillingScheduleFrequency
 */
class BillingScheduleFrequency {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _annually = "_annually";
	/**
	 * @var string
	 */
	const _custom = "_custom";
	/**
	 * @var string
	 */
	const _daily = "_daily";
	/**
	 * @var string
	 */
	const _endOfPeriod = "_endOfPeriod";
	/**
	 * @var string
	 */
	const _monthly = "_monthly";
	/**
	 * @var string
	 */
	const _never = "_never";
	/**
	 * @var string
	 */
	const _oneTime = "_oneTime";
	/**
	 * @var string
	 */
	const _startOfPeriod = "_startOfPeriod";
	/**
	 * @var string
	 */
	const _weekly = "_weekly";
}
