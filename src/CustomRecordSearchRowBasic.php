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
 * CustomRecordSearchRowBasic
 */
class CustomRecordSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $lastModifiedBy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"recType" => "RecordRef",
		"altName" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"created" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModified" => "SearchColumnDateField[]",
		"lastModifiedBy" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"parent" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
