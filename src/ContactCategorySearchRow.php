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
 * ContactCategorySearchRow.
 */
class ContactCategorySearchRow extends SearchRow
{
    /**
     * @var ContactCategorySearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'ContactCategorySearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
