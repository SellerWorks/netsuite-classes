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
 * AccountSearchBasic.
 */
class AccountSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $accountingContext;
    /**
     * @var SearchDoubleField
     */
    public $balance;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $cashFlowRateType;
    /**
     * @var SearchMultiSelectField
     */
    public $category1099Misc;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var SearchStringField
     */
    public $externalIdString;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $generalRateType;
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
    public $isInactive;
    /**
     * @var SearchStringField
     */
    public $legalName;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $locale;
    /**
     * @var SearchStringField
     */
    public $localizedLegalName;
    /**
     * @var SearchStringField
     */
    public $localizedName;
    /**
     * @var SearchStringField
     */
    public $localizedNumber;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchStringField
     */
    public $number;
    /**
     * @var SearchMultiSelectField
     */
    public $parent;
    /**
     * @var SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var SearchCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = array(
        'accountingContext' => 'SearchMultiSelectField',
        'balance' => 'SearchDoubleField',
        'cashFlowRateType' => 'SearchEnumMultiSelectField',
        'category1099Misc' => 'SearchMultiSelectField',
        'description' => 'SearchStringField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'generalRateType' => 'SearchEnumMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'legalName' => 'SearchStringField',
        'locale' => 'SearchEnumMultiSelectField',
        'localizedLegalName' => 'SearchStringField',
        'localizedName' => 'SearchStringField',
        'localizedNumber' => 'SearchStringField',
        'name' => 'SearchStringField',
        'number' => 'SearchStringField',
        'parent' => 'SearchMultiSelectField',
        'subsidiary' => 'SearchMultiSelectField',
        'type' => 'SearchEnumMultiSelectField',
        'customFieldList' => 'SearchCustomFieldList',
    );
}
