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
 * PayrollItemSearchAdvanced.
 */
class PayrollItemSearchAdvanced extends SearchRecord
{
    /**
     * @var PayrollItemSearch
     */
    public $criteria;
    /**
     * @var PayrollItemSearchRow
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
        'criteria' => 'PayrollItemSearch',
        'columns' => 'PayrollItemSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    ];
}
