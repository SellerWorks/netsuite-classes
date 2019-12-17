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
 * CustomRecordTypeLinks
 */
class CustomRecordTypeLinks {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $linkCenter;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $linkSection;
	/**
	 * @access public
	 * @var string
	 */
	public $linkLabel;

	static $paramtypesmap = array(
		"linkCenter" => "RecordRef",
		"linkSection" => "RecordRef",
		"linkLabel" => "string",
	);
}
