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
 * AccountSearchRowBasic.
 */
class AccountSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $accountingContext;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $balance;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $cashFlowRateType;
    /**
     * @var SearchColumnSelectField[]
     */
    public $category1099Misc;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $generalRateType;
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
    public $legalName;
    /**
     * @var SearchColumnStringField[]
     */
    public $locale;
    /**
     * @var SearchColumnStringField[]
     */
    public $localizedLegalName;
    /**
     * @var SearchColumnStringField[]
     */
    public $localizedName;
    /**
     * @var SearchColumnStringField[]
     */
    public $localizedNumber;
    /**
     * @var SearchColumnStringField[]
     */
    public $name;
    /**
     * @var SearchColumnStringField[]
     */
    public $number;
    /**
     * @var SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var SearchColumnCustomFieldList
     */
    public $customFieldList;

    public static $paramtypesmap = [
        'accountingContext' => 'SearchColumnStringField[]',
        'balance' => 'SearchColumnDoubleField[]',
        'cashFlowRateType' => 'SearchColumnEnumSelectField[]',
        'category1099Misc' => 'SearchColumnSelectField[]',
        'description' => 'SearchColumnStringField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'generalRateType' => 'SearchColumnEnumSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'legalName' => 'SearchColumnStringField[]',
        'locale' => 'SearchColumnStringField[]',
        'localizedLegalName' => 'SearchColumnStringField[]',
        'localizedName' => 'SearchColumnStringField[]',
        'localizedNumber' => 'SearchColumnStringField[]',
        'name' => 'SearchColumnStringField[]',
        'number' => 'SearchColumnStringField[]',
        'subsidiary' => 'SearchColumnSelectField[]',
        'type' => 'SearchColumnEnumSelectField[]',
        'customFieldList' => 'SearchColumnCustomFieldList',
    ];
}
