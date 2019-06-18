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
 * TaxTypeSearchBasic.
 */
class TaxTypeSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var SearchStringField
     */
    public $description;
    /**
     * @var SearchBooleanField
     */
    public $doesNotAddToTotal;
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
    public $isInactive;
    /**
     * @var SearchStringField
     */
    public $name;
    /**
     * @var SearchMultiSelectField
     */
    public $nexus;
    /**
     * @var SearchMultiSelectField
     */
    public $payablesAccount;
    /**
     * @var SearchBooleanField
     */
    public $postToItemCost;
    /**
     * @var SearchMultiSelectField
     */
    public $receivablesAccount;
    /**
     * @var SearchBooleanField
     */
    public $reverseCharge;
    /**
     * @var SearchBooleanField
     */
    public $taxInNetAmount;

    public static $paramtypesmap = [
        'country' => 'SearchEnumMultiSelectField',
        'description' => 'SearchStringField',
        'doesNotAddToTotal' => 'SearchBooleanField',
        'externalId' => 'SearchMultiSelectField',
        'externalIdString' => 'SearchStringField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'isInactive' => 'SearchBooleanField',
        'name' => 'SearchStringField',
        'nexus' => 'SearchMultiSelectField',
        'payablesAccount' => 'SearchMultiSelectField',
        'postToItemCost' => 'SearchBooleanField',
        'receivablesAccount' => 'SearchMultiSelectField',
        'reverseCharge' => 'SearchBooleanField',
        'taxInNetAmount' => 'SearchBooleanField',
    ];
}
