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
 * SiteCategory_accounting
 */
class SiteCategory_accounting {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $website;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var string
	 */
	public $categoryDescription;

	static $paramtypesmap = array(
		"website" => "RecordRef",
		"category" => "RecordRef",
		"isDefault" => "boolean",
		"categoryDescription" => "string",
	);
}
