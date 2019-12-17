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
 * PriceLevelSearchAdvanced.
 */
class PriceLevelSearchAdvanced extends SearchRecord
{
    /**
     * @var PriceLevelSearch
     */
    public $criteria;
    /**
     * @var PriceLevelSearchRow
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
        'criteria' => 'PriceLevelSearch',
        'columns' => 'PriceLevelSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
