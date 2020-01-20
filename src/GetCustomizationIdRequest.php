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
 * GetCustomizationIdRequest
 */
class GetCustomizationIdRequest {
	/**
	 * @access public
	 * @var CustomizationType
	 */
	public $customizationType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeInactives;

	static $paramtypesmap = array(
		"customizationType" => "CustomizationType",
		"includeInactives" => "boolean",
	);
}
