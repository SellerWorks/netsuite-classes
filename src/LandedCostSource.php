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
 * LandedCostSource
 */
class LandedCostSource {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _manual = "_manual";
	/**
	 * @var string
	 */
	const _otherTransaction = "_otherTransaction";
	/**
	 * @var string
	 */
	const _otherTransactionExcludeTax = "_otherTransactionExcludeTax";
	/**
	 * @var string
	 */
	const _thisTransaction = "_thisTransaction";
}
