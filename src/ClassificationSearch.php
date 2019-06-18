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
 * ClassificationSearch.
 */
class ClassificationSearch extends SearchRecord
{
    /**
     * @var ClassificationSearchBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ClassificationSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}