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
 * PayrollItemSearchBasic.
 */
class PayrollItemSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $expenseAccount;
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
     * @var SearchEnumMultiSelectField
     */
    public $itemTypeNoHierarchy;
    /**
     * @var SearchMultiSelectField
     */
    public $liabilityAccount;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchMultiSelectField
     */
    public $vendor;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'expenseAccount' => 'SearchMultiSelectField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'itemTypeNoHierarchy' => 'SearchEnumMultiSelectField',
        'liabilityAccount' => 'SearchMultiSelectField',
        'name' => 'SearchStringField',
        'subsidiary' => 'SearchMultiSelectField',
        'vendor' => 'SearchMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
