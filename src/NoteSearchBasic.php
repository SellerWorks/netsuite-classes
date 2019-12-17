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
 * NoteSearchBasic.
 */
class NoteSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $author;
    /**
     * @var SearchBooleanField
     */
    public $direction;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchStringField
     */
    public $note;
    /**
     * @var SearchDateField
     */
    public $noteDate;
    /**
     * @var SearchMultiSelectField
     */
    public $noteType;
    /**
     * @var SearchStringField
     */
    public $title;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'author' => 'SearchMultiSelectField',
        'direction' => 'SearchBooleanField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'note' => 'SearchStringField',
        'noteDate' => 'SearchDateField',
        'noteType' => 'SearchMultiSelectField',
        'title' => 'SearchStringField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
