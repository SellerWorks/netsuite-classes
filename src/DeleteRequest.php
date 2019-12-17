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
 * DeleteRequest
 */
class DeleteRequest {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $baseRef;
	/**
	 * @access public
	 * @var DeletionReason
	 */
	public $deletionReason;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef",
		"deletionReason" => "DeletionReason",
	);
}
