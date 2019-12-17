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
 * SubsidiarySearchAdvanced.
 */
class SubsidiarySearchAdvanced extends SearchRecord
{
    /**
     * @var SubsidiarySearch
     */
    public $criteria;
    /**
     * @var SubsidiarySearchRow
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
        'criteria' => 'SubsidiarySearch',
        'columns' => 'SubsidiarySearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
