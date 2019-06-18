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
 * ConsolidatedExchangeRateSearchAdvanced.
 */
class ConsolidatedExchangeRateSearchAdvanced extends SearchRecord
{
    /**
     * @var ConsolidatedExchangeRateSearch
     */
    public $criteria;
    /**
     * @var ConsolidatedExchangeRateSearchRow
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

    public static $paramtypesmap = array(
        'criteria' => 'ConsolidatedExchangeRateSearch',
        'columns' => 'ConsolidatedExchangeRateSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
