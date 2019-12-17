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
 * CustomRecordTypeTabsList
 */
class CustomRecordTypeTabsList {
	/**
	 * @access public
	 * @var CustomRecordTypeTabs[]
	 */
	public $tabs;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"tabs" => "CustomRecordTypeTabs[]",
		"replaceAll" => "boolean",
	);
}
