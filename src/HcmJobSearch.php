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
 * HcmJobSearch.
 */
class HcmJobSearch extends SearchRecord
{
    /**
     * @var HcmJobSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'HcmJobSearchBasic',
        'employeeJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
