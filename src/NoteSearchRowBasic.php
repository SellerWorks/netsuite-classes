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
 * NoteSearchRowBasic.
 */
class NoteSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $author;
    /**
     * @var SearchColumnStringField[]
     */
    public $direction;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnStringField[]
     */
    public $note;
    /**
     * @var SearchColumnDateField[]
     */
    public $noteDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $noteType;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'author' => 'SearchColumnSelectField[]',
        'direction' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'note' => 'SearchColumnStringField[]',
        'noteDate' => 'SearchColumnDateField[]',
        'noteType' => 'SearchColumnStringField[]',
        'title' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
