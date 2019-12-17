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
 * TaxTypeNexusAccounts.
 */
class TaxTypeNexusAccounts
{
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var RecordRef
     */
    public $payablesAccount;
    /**
     * @var RecordRef
     */
    public $receivablesAccount;

    public static $paramtypesmap = [
        'nexus' => 'RecordRef',
        'payablesAccount' => 'RecordRef',
        'receivablesAccount' => 'RecordRef',
    ];
}
