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
 * BomRevision
 */
class BomRevision extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $billOfMaterials;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveStartDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveEndDate;
	/**
	 * @access public
	 * @var BomRevisionComponentList
	 */
	public $componentList;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"name" => "string",
		"createdDate" => "dateTime",
		"billOfMaterials" => "RecordRef",
		"memo" => "string",
		"isInactive" => "boolean",
		"effectiveStartDate" => "dateTime",
		"effectiveEndDate" => "dateTime",
		"componentList" => "BomRevisionComponentList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
