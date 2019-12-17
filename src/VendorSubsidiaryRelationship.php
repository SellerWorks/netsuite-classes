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
 * VendorSubsidiaryRelationship.
 */
class VendorSubsidiaryRelationship extends Record
{
    /**
     * @var RecordRef
     */
    public $baseCurrency;
    /**
     * @var float
     */
    public $creditLimit;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var bool
     */
    public $isPrimarySub;
    /**
     * @var RecordRef
     */
    public $primaryCurrency;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var RecordRef
     */
    public $taxItem;
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
        'baseCurrency' => 'RecordRef',
        'creditLimit' => 'float',
        'entity' => 'RecordRef',
        'isPrimarySub' => 'boolean',
        'primaryCurrency' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'taxItem' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
