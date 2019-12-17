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
 * SearchMoreWithIdRequest
 */
class SearchMoreWithIdRequest
{
    /**
     * @access public
     * @var string
     */
    public $searchId;
    /**
     * @access public
     * @var integer
     */
    public $pageIndex;

    public static $paramtypesmap = array(
        "searchId" => "string",
        "pageIndex" => "integer",
    );
}
