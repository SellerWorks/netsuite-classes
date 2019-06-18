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
 * ManufacturingCostTemplate.
 */
class ManufacturingCostTemplate extends Record
{
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var ManufacturingCostDetailList
     */
    public $costDetailList;
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

    public static $paramtypesmap = array(
        'customForm' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'name' => 'string',
        'memo' => 'string',
        'isInactive' => 'boolean',
        'costDetailList' => 'ManufacturingCostDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    );
}
