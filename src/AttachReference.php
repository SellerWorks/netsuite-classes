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
 * AttachReference
 */
class AttachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $attachTo;

	static $paramtypesmap = array(
		"attachTo" => "BaseRef",
	);
}
