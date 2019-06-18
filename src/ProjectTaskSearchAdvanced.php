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
 * ProjectTaskSearchAdvanced.
 */
class ProjectTaskSearchAdvanced extends SearchRecord
{
    /**
     * @var ProjectTaskSearch
     */
    public $criteria;
    /**
     * @var ProjectTaskSearchRow
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
        'criteria' => 'ProjectTaskSearch',
        'columns' => 'ProjectTaskSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
