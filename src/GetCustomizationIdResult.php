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
 * GetCustomizationIdResult.
 */
class GetCustomizationIdResult
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
     * @var CustomizationRefList
     */
    public $customizationRefList;

    public static $paramtypesmap = [
        'status' => 'Status',
        'totalRecords' => 'integer',
        'customizationRefList' => 'CustomizationRefList',
    ];
}
