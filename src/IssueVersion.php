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
 * IssueVersion
 */
class IssueVersion {
	/**
	 * @access public
	 * @var boolean
	 */
	public $primary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $version;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $build;

	static $paramtypesmap = array(
		"primary" => "boolean",
		"version" => "RecordRef",
		"build" => "RecordRef",
	);
}
