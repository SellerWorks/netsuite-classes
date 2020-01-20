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
 * FileSiteCategory
 */
class FileSiteCategory {
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var string
	 */
	public $categoryDescription;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $website;

	static $paramtypesmap = array(
		"isDefault" => "boolean",
		"category" => "RecordRef",
		"categoryDescription" => "string",
		"website" => "RecordRef",
	);
}
