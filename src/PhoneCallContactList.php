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
 * PhoneCallContactList
 */
class PhoneCallContactList {
	/**
	 * @access public
	 * @var PhoneCallContact[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"contact" => "PhoneCallContact[]",
		"replaceAll" => "boolean",
	);
}
