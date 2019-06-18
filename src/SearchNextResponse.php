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
 * SearchNextResponse.
 */
class SearchNextResponse
{
    /**
     * @var SearchResult
     */
    public $searchResult;

    public static $paramtypesmap = [
        'searchResult' => 'SearchResult',
    ];
}