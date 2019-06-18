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
 * EntityGroupType.
 */
class EntityGroupType
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _contact = '_contact';
    /**
     * @var string
     */
    const _customer = '_customer';
    /**
     * @var string
     */
    const _employee = '_employee';
    /**
     * @var string
     */
    const _partner = '_partner';
    /**
     * @var string
     */
    const _vendor = '_vendor';
}
