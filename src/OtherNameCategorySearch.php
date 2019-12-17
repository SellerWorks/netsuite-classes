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
 * OtherNameCategorySearch.
 */
class OtherNameCategorySearch extends SearchRecord
{
    /**
     * @var OtherNameCategorySearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;

    public static $paramtypesmap = [
        'basic' => 'OtherNameCategorySearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
    ];
}
