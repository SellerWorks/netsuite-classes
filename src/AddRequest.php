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
 * AddRequest
 */
class AddRequest {
	/**
	 * @access public
	 * @var Record
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record",
	);
}
