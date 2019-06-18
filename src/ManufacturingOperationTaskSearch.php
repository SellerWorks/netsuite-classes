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
 * ManufacturingOperationTaskSearch.
 */
class ManufacturingOperationTaskSearch extends SearchRecord
{
    /**
     * @var ManufacturingOperationTaskSearchBasic
     */
    public $basic;
    /**
     * @var ManufacturingOperationTaskSearchBasic
     */
    public $predecessorJoin;
    /**
     * @var EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var TransactionSearchBasic
     */
    public $workOrderJoin;
    /**
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    public static $paramtypesmap = array(
        'basic' => 'ManufacturingOperationTaskSearchBasic',
        'predecessorJoin' => 'ManufacturingOperationTaskSearchBasic',
        'userJoin' => 'EmployeeSearchBasic',
        'workOrderJoin' => 'TransactionSearchBasic',
        'customSearchJoin' => 'CustomSearchJoin[]',
    );
}
