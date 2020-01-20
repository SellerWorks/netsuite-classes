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
 * JobResourcesList
 */
class JobResourcesList {
	/**
	 * @access public
	 * @var JobResources[]
	 */
	public $jobResources;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"jobResources" => "JobResources[]",
		"replaceAll" => "boolean",
	);
}
