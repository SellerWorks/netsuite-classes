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
 * MessageSearchBasic.
 */
class MessageSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $author;
    /**
     * @var SearchStringField
     */
    public $authorEmail;
    /**
     * @var SearchStringField
     */
    public $bcc;
    /**
     * @var SearchStringField
     */
    public $cc;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchBooleanField
     */
    public $hasAttachment;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchBooleanField
     */
    public $internalOnly;
    /**
     * @var SearchStringField
     */
    public $message;
    /**
     * @var SearchDateField
     */
    public $messageDate;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $messageType;
    /**
     * @var SearchMultiSelectField
     */
    public $recipient;
    /**
     * @var SearchStringField
     */
    public $recipientEmail;
    /**
     * @var SearchStringField
     */
    public $subject;

    public static $paramtypesmap = array(
        'author' => 'SearchMultiSelectField',
        'authorEmail' => 'SearchStringField',
        'bcc' => 'SearchStringField',
        'cc' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'hasAttachment' => 'SearchBooleanField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'internalOnly' => 'SearchBooleanField',
        'message' => 'SearchStringField',
        'messageDate' => 'SearchDateField',
        'messageType' => 'SearchEnumMultiSelectField',
        'recipient' => 'SearchMultiSelectField',
        'recipientEmail' => 'SearchStringField',
        'subject' => 'SearchStringField',
    );
}
