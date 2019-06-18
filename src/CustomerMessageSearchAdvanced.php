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
 * CustomerMessageSearchAdvanced.
 */
class CustomerMessageSearchAdvanced extends SearchRecord
{
    /**
     * @var CustomerMessageSearch
     */
    public $criteria;
    /**
     * @var CustomerMessageSearchRow
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
        'criteria' => 'CustomerMessageSearch',
        'columns' => 'CustomerMessageSearchRow',
        'savedSearchId' => 'string',
        'savedSearchScriptId' => 'string',
    );
}
