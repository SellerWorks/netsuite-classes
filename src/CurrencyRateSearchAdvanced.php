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
 * CurrencyRateSearchAdvanced.
 */
class CurrencyRateSearchAdvanced extends SearchRecord
{
    /**
     * @var CurrencyRateSearch
     */
    public $criteria;
    /**
     * @var CurrencyRateSearchRow
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
        'criteria' => 'CurrencyRateSearch',
        'columns' => 'CurrencyRateSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
