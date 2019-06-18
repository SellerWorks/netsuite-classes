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
 * SearchMoreWithIdRequest.
 */
class SearchMoreWithIdRequest
{
    /**
     * @var string
     */
    public $searchId;
    /**
     * @var int
     */
    public $pageIndex;

    public static $paramtypesmap = [
        'searchId' => 'string',
        'pageIndex' => 'integer',
    ];
}