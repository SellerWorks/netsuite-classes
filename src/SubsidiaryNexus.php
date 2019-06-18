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
 * SubsidiaryNexus.
 */
class SubsidiaryNexus
{
    /**
     * @var RecordRef
     */
    public $nexusId;
    /**
     * @var string
     */
    public $country;

    public static $paramtypesmap = array(
        'nexusId' => 'RecordRef',
        'country' => 'string',
    );
}
