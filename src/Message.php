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
 * Message
 */
class Message extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $author;
	/**
	 * @access public
	 * @var string
	 */
	public $authorEmail;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recipient;
	/**
	 * @access public
	 * @var string
	 */
	public $recipientEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $cc;
	/**
	 * @access public
	 * @var string
	 */
	public $bcc;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $messageDate;
	/**
	 * @access public
	 * @var string
	 */
	public $recordName;
	/**
	 * @access public
	 * @var string
	 */
	public $recordTypeName;
	/**
	 * @access public
	 * @var string
	 */
	public $subject;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var boolean
	 */
	public $emailed;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $activity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $compressAttachments;
	/**
	 * @access public
	 * @var boolean
	 */
	public $incoming;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;
	/**
	 * @access public
	 * @var MessageMediaItemList
	 */
	public $mediaItemList;
	/**
	 * @access public
	 * @var string
	 */
	public $dateTime;
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
		"author" => "RecordRef",
		"authorEmail" => "string",
		"recipient" => "RecordRef",
		"recipientEmail" => "string",
		"cc" => "string",
		"bcc" => "string",
		"messageDate" => "dateTime",
		"recordName" => "string",
		"recordTypeName" => "string",
		"subject" => "string",
		"message" => "string",
		"emailed" => "boolean",
		"activity" => "RecordRef",
		"compressAttachments" => "boolean",
		"incoming" => "boolean",
		"lastModifiedDate" => "dateTime",
		"transaction" => "RecordRef",
		"mediaItemList" => "MessageMediaItemList",
		"dateTime" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
}
