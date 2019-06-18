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
 * TimeBillSearchAdvanced.
 */
class TimeBillSearchAdvanced extends SearchRecord
{
    /**
     * @var TimeBillSearch
     */
    public $criteria;
    /**
     * @var TimeBillSearchRow
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
        'criteria' => 'TimeBillSearch',
        'columns' => 'TimeBillSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
