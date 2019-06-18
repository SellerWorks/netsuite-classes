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
 * MessageSearchRowBasic.
 */
class MessageSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $author;
    /**
     * @var SearchColumnStringField[]
     */
    public $authorEmail;
    /**
     * @var SearchColumnStringField[]
     */
    public $bcc;
    /**
     * @var SearchColumnStringField[]
     */
    public $cc;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $hasAttachment;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $internalOnly;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isEmailed;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isIncoming;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnDateField[]
     */
    public $messageDate;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $messageType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $recipient;
    /**
     * @var SearchColumnStringField[]
     */
    public $recipientEmail;
    /**
     * @var SearchColumnStringField[]
     */
    public $subject;

    public static $paramtypesmap = array(
        'author' => 'SearchColumnSelectField[]',
        'authorEmail' => 'SearchColumnStringField[]',
        'bcc' => 'SearchColumnStringField[]',
        'cc' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'hasAttachment' => 'SearchColumnBooleanField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'internalOnly' => 'SearchColumnBooleanField[]',
        'isEmailed' => 'SearchColumnBooleanField[]',
        'isIncoming' => 'SearchColumnBooleanField[]',
        'message' => 'SearchColumnStringField[]',
        'messageDate' => 'SearchColumnDateField[]',
        'messageType' => 'SearchColumnEnumSelectField[]',
        'recipient' => 'SearchColumnSelectField[]',
        'recipientEmail' => 'SearchColumnStringField[]',
        'subject' => 'SearchColumnStringField[]',
    );
}
