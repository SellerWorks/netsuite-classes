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
 * TimeSheetSearchAdvanced.
 */
class TimeSheetSearchAdvanced extends SearchRecord
{
    /**
     * @var TimeSheetSearch
     */
    public $criteria;
    /**
     * @var TimeSheetSearchRow
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
        'criteria' => 'TimeSheetSearch',
        'columns' => 'TimeSheetSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
