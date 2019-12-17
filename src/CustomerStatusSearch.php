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
 * CustomerStatusSearch
 */
class CustomerStatusSearch extends SearchRecord
{
    /**
     * @access public
     * @var CustomerStatusSearchBasic
     */
    public $basic;
    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        "basic" => "CustomerStatusSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );
}
