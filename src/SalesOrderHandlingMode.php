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
 * SalesOrderHandlingMode
 */
class SalesOrderHandlingMode {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _process = "_process";
	/**
	 * @var string
	 */
	const _recordExternalEvent = "_recordExternalEvent";
	/**
	 * @var string
	 */
	const _saveOnly = "_saveOnly";
}
