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
 * BudgetCategory.
 */
class BudgetCategory extends Record
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $budgetType;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;

    public static $paramtypesmap = array(
        'name' => 'string',
        'budgetType' => 'boolean',
        'isInactive' => 'boolean',
        'internalId' => 'string',
    );
}
