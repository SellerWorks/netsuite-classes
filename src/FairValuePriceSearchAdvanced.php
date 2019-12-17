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
 * FairValuePriceSearchAdvanced.
 */
class FairValuePriceSearchAdvanced extends SearchRecord
{
    /**
     * @var FairValuePriceSearch
     */
    public $criteria;
    /**
     * @var FairValuePriceSearchRow
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
        'criteria' => 'FairValuePriceSearch',
        'columns' => 'FairValuePriceSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
