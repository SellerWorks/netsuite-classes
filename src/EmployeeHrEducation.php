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
 * EmployeeHrEducation
 */
class EmployeeHrEducation {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $education;
	/**
	 * @access public
	 * @var string
	 */
	public $degree;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $degreeDate;

	static $paramtypesmap = array(
		"education" => "RecordRef",
		"degree" => "string",
		"degreeDate" => "dateTime",
	);
}
