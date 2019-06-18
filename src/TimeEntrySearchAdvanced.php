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
 * TimeEntrySearchAdvanced.
 */
class TimeEntrySearchAdvanced extends SearchRecord
{
    /**
     * @var TimeEntrySearch
     */
    public $criteria;
    /**
     * @var TimeEntrySearchRow
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
        'criteria' => 'TimeEntrySearch',
        'columns' => 'TimeEntrySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
