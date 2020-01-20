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
 * FileSearchRowBasic
 */
class FileSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableWithoutLogin;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $documentSize;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $fileType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $folder;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $hits;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $hostedPath;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isAvailable;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $modified;
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
	 * @var SearchColumnStringField[]
	 */
	public $url;

	static $paramtypesmap = array(
		"availableWithoutLogin" => "SearchColumnBooleanField[]",
		"created" => "SearchColumnDateField[]",
		"dateViewed" => "SearchColumnDateField[]",
		"description" => "SearchColumnStringField[]",
		"documentSize" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fileType" => "SearchColumnEnumSelectField[]",
		"folder" => "SearchColumnSelectField[]",
		"hits" => "SearchColumnLongField[]",
		"hostedPath" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isAvailable" => "SearchColumnBooleanField[]",
		"modified" => "SearchColumnDateField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"url" => "SearchColumnStringField[]",
	);
}
