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
 * CustomerSubsidiaryRelationship.
 */
class CustomerSubsidiaryRelationship extends Record
{
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $subsidiary;
    /**
     * @var bool
     */
    public $isPrimarySub;
    /**
     * @var RecordRef
     */
    public $primaryCurrency;
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
        'entity' => 'RecordRef',
        'subsidiary' => 'RecordRef',
        'isPrimarySub' => 'boolean',
        'primaryCurrency' => 'RecordRef',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
