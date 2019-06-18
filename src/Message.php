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
 * Message.
 */
class Message extends Record
{
    /**
     * @var RecordRef
     */
    public $author;
    /**
     * @var string
     */
    public $authorEmail;
    /**
     * @var RecordRef
     */
    public $recipient;
    /**
     * @var string
     */
    public $recipientEmail;
    /**
     * @var string
     */
    public $cc;
    /**
     * @var string
     */
    public $bcc;
    /**
     * @var dateTime
     */
    public $messageDate;
    /**
     * @var string
     */
    public $recordName;
    /**
     * @var string
     */
    public $recordTypeName;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string
     */
    public $message;
    /**
     * @var bool
     */
    public $emailed;
    /**
     * @var RecordRef
     */
    public $activity;
    /**
     * @var bool
     */
    public $compressAttachments;
    /**
     * @var bool
     */
    public $incoming;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $transaction;
    /**
     * @var MessageMediaItemList
     */
    public $mediaItemList;
    /**
     * @var string
     */
    public $dateTime;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'author' => 'RecordRef',
        'authorEmail' => 'string',
        'recipient' => 'RecordRef',
        'recipientEmail' => 'string',
        'cc' => 'string',
        'bcc' => 'string',
        'messageDate' => 'dateTime',
        'recordName' => 'string',
        'recordTypeName' => 'string',
        'subject' => 'string',
        'message' => 'string',
        'emailed' => 'boolean',
        'activity' => 'RecordRef',
        'compressAttachments' => 'boolean',
        'incoming' => 'boolean',
        'lastModifiedDate' => 'dateTime',
        'transaction' => 'RecordRef',
        'mediaItemList' => 'MessageMediaItemList',
        'dateTime' => 'string',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
