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
 * DetachReference
 */
class DetachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $detachFrom;

	static $paramtypesmap = array(
		"detachFrom" => "BaseRef",
	);
}
