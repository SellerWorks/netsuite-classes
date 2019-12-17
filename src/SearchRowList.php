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
 * SearchRowList.
 */
class SearchRowList
{
    /**
     * @var SearchRow[]
     */
    public $searchRow;

    public static $paramtypesmap = [
        'searchRow' => 'SearchRow[]',
    ];
}
