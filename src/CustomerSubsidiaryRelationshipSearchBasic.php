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
 * CustomerSubsidiaryRelationshipSearchBasic.
 */
class CustomerSubsidiaryRelationshipSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchDoubleField
     */
    public $balance;
    /**
     * @var SearchDoubleField
     */
    public $depositBalance;
    /**
     * @var SearchMultiSelectField
     */
    public $entity;
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
     * @var SearchBooleanField
     */
    public $isPrimarySub;
    /**
     * @var SearchMultiSelectField
     */
    public $primaryCurrency;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchDoubleField
     */
    public $unbilledOrders;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'balance' => 'SearchDoubleField',
        'depositBalance' => 'SearchDoubleField',
        'entity' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isPrimarySub' => 'SearchBooleanField',
        'primaryCurrency' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'unbilledOrders' => 'SearchDoubleField',
        'customFieldList' => 'SearchCustomFieldList',
    ];
}
