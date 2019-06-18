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
 * SearchRequest.
 */
class SearchRequest
{
    /**
     * @var SearchRecord
     */
    public $searchRecord;

    public static $paramtypesmap = [
        'searchRecord' => 'SearchRecord',
    ];
}
