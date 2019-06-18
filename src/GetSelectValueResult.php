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
 * GetSelectValueResult.
 */
class GetSelectValueResult
{
    /**
     * @var Status
     */
    public $status;
    /**
     * @var int
     */
    public $totalRecords;
    /**
     * @var int
     */
    public $totalPages;
    /**
     * @var BaseRefList
     */
    public $baseRefList;

    public static $paramtypesmap = array(
        'status' => 'Status',
        'totalRecords' => 'integer',
        'totalPages' => 'integer',
        'baseRefList' => 'BaseRefList',
    );
}
