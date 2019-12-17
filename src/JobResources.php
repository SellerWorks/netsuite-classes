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
 * JobResources
 */
class JobResources {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $jobResource;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;

	static $paramtypesmap = array(
		"jobResource" => "RecordRef",
		"email" => "string",
		"role" => "RecordRef",
	);
}
