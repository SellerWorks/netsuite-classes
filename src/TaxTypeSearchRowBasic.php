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
 * TaxTypeSearchRowBasic.
 */
class TaxTypeSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var SearchColumnStringField[]
     */
    public $description;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $doesNotAddToTotal;
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
    public $name;
    /**
     * @var SearchColumnSelectField[]
     */
    public $nexus;
    /**
     * @var SearchColumnSelectField[]
     */
    public $payablesAccount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $postToItemCost;
    /**
     * @var SearchColumnSelectField[]
     */
    public $receivablesAccount;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $reverseCharge;
    /**
     * @var SearchColumnBooleanField[]
     */
    public $taxInNetAmount;

    public static $paramtypesmap = [
        'country' => 'SearchColumnEnumSelectField[]',
        'description' => 'SearchColumnStringField[]',
        'doesNotAddToTotal' => 'SearchColumnBooleanField[]',
        'externalId' => 'SearchColumnSelectField[]',
        'internalId' => 'SearchColumnSelectField[]',
        'isInactive' => 'SearchColumnBooleanField[]',
        'name' => 'SearchColumnStringField[]',
        'nexus' => 'SearchColumnSelectField[]',
        'payablesAccount' => 'SearchColumnSelectField[]',
        'postToItemCost' => 'SearchColumnBooleanField[]',
        'receivablesAccount' => 'SearchColumnSelectField[]',
        'reverseCharge' => 'SearchColumnBooleanField[]',
        'taxInNetAmount' => 'SearchColumnBooleanField[]',
    ];
}
