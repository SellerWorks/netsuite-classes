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
 * BomRevisionSearchRowBasic.
 */
class BomRevisionSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnSelectField[]
     */
    public $billOfMaterials;
    /**
     * @var SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $effectiveEndDate;
    /**
     * @var SearchColumnDateField[]
     */
    public $effectiveStartDate;
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
     * @var SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'billOfMaterials' => 'SearchColumnSelectField[]',
        'createdDate' => 'SearchColumnDateField[]',
        'effectiveEndDate' => 'SearchColumnDateField[]',
        'effectiveStartDate' => 'SearchColumnDateField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'memo' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    );
}
