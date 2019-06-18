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
 * TaxTypeNexusesTax.
 */
class TaxTypeNexusesTax
{
    /**
     * @var RecordRef
     */
    public $nexus;
    /**
     * @var string
     */
    public $description;
    /**
     * @var RecordRef
     */
    public $saleTaxAcct;
    /**
     * @var RecordRef
     */
    public $purchTaxAcct;

    public static $paramtypesmap = array(
        'nexus' => 'RecordRef',
        'description' => 'string',
        'saleTaxAcct' => 'RecordRef',
        'purchTaxAcct' => 'RecordRef',
    );
}
