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
 * BillingAccountSearchRow.
 */
class BillingAccountSearchRow extends SearchRow
{
    /**
     * @var BillingAccountSearchRowBasic
     */
    public $basic;
    /**
     * @var JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'BillingAccountSearchRowBasic',
        'jobJoin' => 'JobSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    );
}
