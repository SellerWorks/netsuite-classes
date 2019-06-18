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
 * PaycheckJournalEmployeeTaxList.
 */
class PaycheckJournalEmployeeTaxList
{
    /**
     * @var PaycheckJournalEmployeeTax[]
     */
    public $paycheckJournalEmployeeTax;
    /**
     * @var bool
     */
    public $replaceAll;

    public static $paramtypesmap = [
        'paycheckJournalEmployeeTax' => 'PaycheckJournalEmployeeTax[]',
        'replaceAll' => 'boolean',
    ];
}
