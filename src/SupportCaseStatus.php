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
 * SupportCaseStatus
 */
class SupportCaseStatus extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $insertBefore;
	/**
	 * @access public
	 * @var SupportCaseStatusStage
	 */
	public $stage;
	/**
	 * @access public
	 * @var boolean
	 */
	public $caseOnHold;
	/**
	 * @access public
	 * @var boolean
	 */
	public $autoCloseCase;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
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
		"name" => "string",
		"insertBefore" => "RecordRef",
		"stage" => "SupportCaseStatusStage",
		"caseOnHold" => "boolean",
		"autoCloseCase" => "boolean",
		"description" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}
