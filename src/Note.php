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
 * Note.
 */
class Note extends Record
{
    /**
     * @var string
     */
    public $title;
    /**
     * @var RecordRef
     */
    public $noteType;
    /**
     * @var NoteDirection
     */
    public $direction;
    /**
     * @var dateTime
     */
    public $noteDate;
    /**
     * @var string
     */
    public $note;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $activity;
    /**
     * @var RecordRef
     */
    public $author;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $folder;
    /**
     * @var RecordRef
     */
    public $item;
    /**
     * @var RecordRef
     */
    public $media;
    /**
     * @var RecordRef
     */
    public $record;
    /**
     * @var RecordRef
     */
    public $recordType;
    /**
     * @var RecordRef
     */
    public $topic;
    /**
     * @var RecordRef
     */
    public $transaction;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'title' => 'string',
        'noteType' => 'RecordRef',
        'direction' => 'NoteDirection',
        'noteDate' => 'dateTime',
        'note' => 'string',
        'lastModifiedDate' => 'dateTime',
        'activity' => 'RecordRef',
        'author' => 'RecordRef',
        'entity' => 'RecordRef',
        'folder' => 'RecordRef',
        'item' => 'RecordRef',
        'media' => 'RecordRef',
        'record' => 'RecordRef',
        'recordType' => 'RecordRef',
        'topic' => 'RecordRef',
        'transaction' => 'RecordRef',
        'customForm' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
