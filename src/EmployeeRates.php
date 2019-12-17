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
 * EmployeeRates
 */
class EmployeeRates {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entityCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;

	static $paramtypesmap = array(
		"entityCurrency" => "RecordRef",
		"rate" => "float",
	);
}
