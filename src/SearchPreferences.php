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
 * SearchPreferences
 */
class SearchPreferences
{
    /**
     * @access public
     * @var boolean
     */
    public $bodyFieldsOnly;
    /**
     * @access public
     * @var boolean
     */
    public $returnSearchColumns;
    /**
     * @access public
     * @var integer
     */
    public $pageSize;

    public static $paramtypesmap = array(
        "bodyFieldsOnly" => "boolean",
        "returnSearchColumns" => "boolean",
        "pageSize" => "integer",
    );
}
