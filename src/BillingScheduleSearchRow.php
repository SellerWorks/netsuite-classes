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
 * BillingScheduleSearchRow.
 */
class BillingScheduleSearchRow extends SearchRow
{
    /**
     * @var BillingScheduleSearchRowBasic
     */
    public $basic;

    public static $paramtypesmap = array(
        'basic' => 'BillingScheduleSearchRowBasic',
    );
}
