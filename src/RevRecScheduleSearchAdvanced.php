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
 * RevRecScheduleSearchAdvanced.
 */
class RevRecScheduleSearchAdvanced extends SearchRecord
{
    /**
     * @var RevRecScheduleSearch
     */
    public $criteria;
    /**
     * @var RevRecScheduleSearchRow
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
        'criteria' => 'RevRecScheduleSearch',
        'columns' => 'RevRecScheduleSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
