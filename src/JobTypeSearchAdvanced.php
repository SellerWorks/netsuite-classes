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
 * JobTypeSearchAdvanced.
 */
class JobTypeSearchAdvanced extends SearchRecord
{
    /**
     * @var JobTypeSearch
     */
    public $criteria;
    /**
     * @var JobTypeSearchRow
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
        'criteria' => 'JobTypeSearch',
        'columns' => 'JobTypeSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
