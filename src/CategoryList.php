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
 * CategoryList
 */
class CategoryList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $category;

	static $paramtypesmap = array(
		"category" => "RecordRef[]",
	);
}
