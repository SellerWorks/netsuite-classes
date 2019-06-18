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
 * ManufacturingOperationTaskSearchRow.
 */
class ManufacturingOperationTaskSearchRow extends SearchRow
{
    /**
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    public $basic;
    /**
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    public $predecessorJoin;
    /**
     * @var EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var TransactionSearchRowBasic
     */
    public $workOrderJoin;
    /**
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = [
        'basic' => 'ManufacturingOperationTaskSearchRowBasic',
        'predecessorJoin' => 'ManufacturingOperationTaskSearchRowBasic',
        'userJoin' => 'EmployeeSearchRowBasic',
        'workOrderJoin' => 'TransactionSearchRowBasic',
        'customSearchJoin' => 'CustomSearchRowBasic[]',
    ];
}
