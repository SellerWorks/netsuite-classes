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
 * SalesTaxItemSearchAdvanced.
 */
class SalesTaxItemSearchAdvanced extends SearchRecord
{
    /**
     * @var SalesTaxItemSearch
     */
    public $criteria;
    /**
     * @var SalesTaxItemSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;

    public static $paramtypesmap = [
        'criteria' => 'SalesTaxItemSearch',
        'columns' => 'SalesTaxItemSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
