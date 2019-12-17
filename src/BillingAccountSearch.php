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
 * BillingAccountSearch.
 */
class BillingAccountSearch extends SearchRecord
{
    /**
     * @var BillingAccountSearchBasic
     */
    public $basic;
    /**
     * @var JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'BillingAccountSearchBasic',
        'jobJoin' => 'JobSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    ];
}
