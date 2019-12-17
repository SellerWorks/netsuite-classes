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
 * DataCenterUrls
 */
class DataCenterUrls {
	/**
	 * @access public
	 * @var string
	 */
	public $restDomain;
	/**
	 * @access public
	 * @var string
	 */
	public $webservicesDomain;
	/**
	 * @access public
	 * @var string
	 */
	public $systemDomain;

	static $paramtypesmap = array(
		"restDomain" => "string",
		"webservicesDomain" => "string",
		"systemDomain" => "string",
	);
}
