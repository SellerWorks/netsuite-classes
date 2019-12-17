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
 * WinLossReasonSearchAdvanced.
 */
class WinLossReasonSearchAdvanced extends SearchRecord
{
    /**
     * @var WinLossReasonSearch
     */
    public $criteria;
    /**
     * @var WinLossReasonSearchRow
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
        'criteria' => 'WinLossReasonSearch',
        'columns' => 'WinLossReasonSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
