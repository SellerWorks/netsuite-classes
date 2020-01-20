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
 * EmailEmployeesList
 */
class EmailEmployeesList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $emailEmployees;

	static $paramtypesmap = array(
		"emailEmployees" => "RecordRef[]",
	);
}
