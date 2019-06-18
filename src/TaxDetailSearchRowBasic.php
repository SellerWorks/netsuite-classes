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
 * TaxDetailSearchRowBasic.
 */
class TaxDetailSearchRowBasic extends SearchRowBasic
{
    /**
     * @var SearchColumnStringField[]
     */
    public $account;
    /**
     * @var SearchColumnStringField[]
     */
    public $details;
    /**
     * @var SearchColumnLongField[]
     */
    public $lineNumber;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $taxAmount;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $taxBasis;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxCode;
    /**
     * @var SearchColumnDoubleField[]
     */
    public $taxRate;
    /**
     * @var SearchColumnSelectField[]
     */
    public $taxType;
    /**
     * @var SearchColumnLongField[]
     */
    public $tranId;

    public static $paramtypesmap = [
        'account' => 'SearchColumnStringField[]',
        'details' => 'SearchColumnStringField[]',
        'lineNumber' => 'SearchColumnLongField[]',
        'taxAmount' => 'SearchColumnDoubleField[]',
        'taxBasis' => 'SearchColumnDoubleField[]',
        'taxCode' => 'SearchColumnSelectField[]',
        'taxRate' => 'SearchColumnDoubleField[]',
        'taxType' => 'SearchColumnSelectField[]',
        'tranId' => 'SearchColumnLongField[]',
    ];
}
