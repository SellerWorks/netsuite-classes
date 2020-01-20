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
 * ReadResponseList
 */
class ReadResponseList {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var ReadResponse[]
	 */
	public $readResponse;

	static $paramtypesmap = array(
		"status" => "Status",
		"readResponse" => "ReadResponse[]",
	);
}
