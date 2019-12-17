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
 * BomRevision.
 */
class BomRevision extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $name;
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var RecordRef
     */
    public $billOfMaterials;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var dateTime
     */
    public $effectiveStartDate;
    /**
     * @var dateTime
     */
    public $effectiveEndDate;
    /**
     * @var BomRevisionComponentList
     */
    public $componentList;
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
        'customForm' => 'RecordRef',
        'name' => 'string',
        'createdDate' => 'dateTime',
        'billOfMaterials' => 'RecordRef',
        'memo' => 'string',
        'isInactive' => 'boolean',
        'effectiveStartDate' => 'dateTime',
        'effectiveEndDate' => 'dateTime',
        'componentList' => 'BomRevisionComponentList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
