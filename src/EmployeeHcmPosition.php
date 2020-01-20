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
 * EmployeeHcmPosition
 */
class EmployeeHcmPosition {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $position;
	/**
	 * @access public
	 * @var boolean
	 */
	public $primaryPosition;
	/**
	 * @access public
	 * @var string
	 */
	public $positionId;
	/**
	 * @access public
	 * @var float
	 */
	public $positionAllocation;
	/**
	 * @access public
	 * @var float
	 */
	public $fullTimeEquivalent;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employmentCategory;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $reportsTo;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;

	static $paramtypesmap = array(
		"position" => "RecordRef",
		"primaryPosition" => "boolean",
		"positionId" => "string",
		"positionAllocation" => "float",
		"fullTimeEquivalent" => "float",
		"employmentCategory" => "RecordRef",
		"reportsTo" => "RecordRef",
		"subsidiary" => "RecordRef",
		"location" => "RecordRef",
	);
}
