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
 * PricingSearchBasic.
 */
class PricingSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchBooleanField
     */
    public $assignedPriceLevel;
    /**
     * @var SearchMultiSelectField
     */
    public $currency;
    /**
     * @var SearchMultiSelectField
     */
    public $customer;
    /**
     * @var SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var SearchMultiSelectField
     */
    public $item;
    /**
     * @var SearchDoubleField
     */
    public $maximumQuantity;
    /**
     * @var SearchDoubleField
     */
    public $minimumQuantity;
    /**
     * @var SearchMultiSelectField
     */
    public $priceLevel;
    /**
     * @var SearchDoubleField
     */
    public $rate;

    public static $paramtypesmap = [
        'assignedPriceLevel' => 'SearchBooleanField',
        'currency' => 'SearchMultiSelectField',
        'customer' => 'SearchMultiSelectField',
        'internalId' => 'SearchMultiSelectField',
        'internalIdNumber' => 'SearchLongField',
        'item' => 'SearchMultiSelectField',
        'maximumQuantity' => 'SearchDoubleField',
        'minimumQuantity' => 'SearchDoubleField',
        'priceLevel' => 'SearchMultiSelectField',
        'rate' => 'SearchDoubleField',
    ];
}
