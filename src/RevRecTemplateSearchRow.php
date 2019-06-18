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
 * RevRecTemplateSearchRow.
 */
class RevRecTemplateSearchRow extends SearchRow
{
    /**
     * @var RevRecTemplateSearchRowBasic
     */
    public $basic;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;

    public static $paramtypesmap = array(
        'basic' => 'RevRecTemplateSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
    );
}
