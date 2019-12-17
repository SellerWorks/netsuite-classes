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
 * PresentationItemList
 */
class PresentationItemList {
	/**
	 * @access public
	 * @var PresentationItem[]
	 */
	public $presentationItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"presentationItem" => "PresentationItem[]",
		"replaceAll" => "boolean",
	);
}
