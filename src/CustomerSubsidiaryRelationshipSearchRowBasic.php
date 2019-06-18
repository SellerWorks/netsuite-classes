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
 * CustomerSubsidiaryRelationshipSearchRowBasic.
 */
class CustomerSubsidiaryRelationshipSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnDoubleField[]
     */
    public $balance;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $depositbalance;
    /**
     * @var SearchColumnSelectField[]
     */
    public $entity;
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
    public $isprimarysub;
    /**
     * @var SearchColumnSelectField[]
     */
    public $primaryCurrency;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $unbilledorders;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'balance' => 'SearchColumnDoubleField[]',
        'depositbalance' => 'SearchColumnDoubleField[]',
        'entity' => 'SearchColumnSelectField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isprimarysub' => 'SearchColumnBooleanField[]',
        'primaryCurrency' => 'SearchColumnSelectField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'unbilledorders' => 'SearchColumnDoubleField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
