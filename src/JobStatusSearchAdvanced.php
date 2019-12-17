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
 * JobStatusSearchAdvanced.
 */
class JobStatusSearchAdvanced extends SearchRecord
{
    /**
     * @var JobStatusSearch
     */
    public $criteria;
    /**
     * @var JobStatusSearchRow
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
        'criteria' => 'JobStatusSearch',
        'columns' => 'JobStatusSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
