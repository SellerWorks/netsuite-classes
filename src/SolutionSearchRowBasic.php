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
 * SolutionSearchRowBasic.
 */
class SolutionSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var SearchColumnLongField[]
     */
    public $caseCount;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $displayOnline;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var SearchColumnStringField[]
     */
    public $message;
    /**
     * @var SearchColumnStringField[]
     */
    public $previewref;
    /**
     * @var SearchColumnStringField[]
     */
    public $solutionCode;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var SearchColumnStringField[]
     */
    public $title;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'assigned' => 'SearchColumnSelectField[]',
        'caseCount' => 'SearchColumnLongField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'description' => 'SearchColumnStringField[]',
        'displayOnline' => 'SearchColumnBooleanField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'lastModifiedDate' => 'SearchColumnDateField[]',
        'message' => 'SearchColumnStringField[]',
        'previewref' => 'SearchColumnStringField[]',
        'solutionCode' => 'SearchColumnStringField[]',
        'status' => 'SearchColumnEnumSelectField[]',
        'title' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
