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
 * Partners.
 */
class Partners
{
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var RecordRef
     */
    public $partnerRole;
    /**
     * @var bool
     */
    public $isPrimary;
    /**
     * @var float
     */
    public $contribution;

    public static $paramtypesmap = array(
        'partner' => 'RecordRef',
        'partnerRole' => 'RecordRef',
        'isPrimary' => 'boolean',
        'contribution' => 'float',
    );
}
