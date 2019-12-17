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
 * AttachContactReference
 */
class AttachContactReference extends AttachReference {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contactRole;

	static $paramtypesmap = array(
		"contact" => "RecordRef",
		"contactRole" => "RecordRef",
	);
}
