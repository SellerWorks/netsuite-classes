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
 * EntityCustomFieldFilterList
 */
class EntityCustomFieldFilterList
{
    /**
     * @access public
     * @var EntityCustomFieldFilter[]
     */
    public $filter;
    /**
     * @access public
     * @var boolean
     */
    public $replaceAll;

    public static $paramtypesmap = array(
        "filter" => "EntityCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );
}
