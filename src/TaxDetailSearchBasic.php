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
 * TaxDetailSearchBasic.
 */
class TaxDetailSearchBasic extends SearchRecordBasic
{
    /**
     * @var SearchMultiSelectField
     */
    public $account;
    /**
     * @var SearchLongField
     */
    public $lineNumber;
    /**
     * @var SearchDoubleField
     */
    public $taxAmount;
    /**
     * @var SearchDoubleField
     */
    public $taxBasis;
    /**
     * @var SearchMultiSelectField
     */
    public $taxCode;
    /**
     * @var SearchDoubleField
     */
    public $taxRate;
    /**
     * @var SearchMultiSelectField
     */
    public $taxType;
    /**
     * @var SearchMultiSelectField
     */
    public $tranId;

    public static $paramtypesmap = array(
        'account' => 'SearchMultiSelectField',
        'lineNumber' => 'SearchLongField',
        'taxAmount' => 'SearchDoubleField',
        'taxBasis' => 'SearchDoubleField',
        'taxCode' => 'SearchMultiSelectField',
        'taxRate' => 'SearchDoubleField',
        'taxType' => 'SearchMultiSelectField',
        'tranId' => 'SearchMultiSelectField',
    );
}
