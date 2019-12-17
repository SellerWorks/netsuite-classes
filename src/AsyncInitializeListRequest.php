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
 * AsyncInitializeListRequest
 */
class AsyncInitializeListRequest {
	/**
	 * @access public
	 * @var InitializeRecord[]
	 */
	public $initializeRecord;

	static $paramtypesmap = array(
		"initializeRecord" => "InitializeRecord[]",
	);
}
