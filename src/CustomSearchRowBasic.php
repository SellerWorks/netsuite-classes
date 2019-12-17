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
 * CustomSearchRowBasic
 */
class CustomSearchRowBasic {
	/**
	 * @access public
	 * @var CustomizationRef
	 */
	public $customizationRef;
	/**
	 * @access public
	 * @var SearchRowBasic
	 */
	public $searchRowBasic;

	static $paramtypesmap = array(
		"customizationRef" => "CustomizationRef",
		"searchRowBasic" => "SearchRowBasic",
	);
}
