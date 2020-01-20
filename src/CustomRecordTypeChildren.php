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
 * CustomRecordTypeChildren
 */
class CustomRecordTypeChildren {
	/**
	 * @access public
	 * @var string
	 */
	public $childDescr;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $childTab;

	static $paramtypesmap = array(
		"childDescr" => "string",
		"childTab" => "RecordRef",
	);
}
