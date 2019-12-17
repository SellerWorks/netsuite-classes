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
 * EmployeeDirectDepositAccountStatus
 */
class EmployeeDirectDepositAccountStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _active = "_active";
	/**
	 * @var string
	 */
	const _pending = "_pending";
	/**
	 * @var string
	 */
	const _verifying = "_verifying";
	/**
	 * @var string
	 */
	const _failed = "_failed";
	/**
	 * @var string
	 */
	const _inactive = "_inactive";
}
