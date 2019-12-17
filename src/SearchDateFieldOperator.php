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
 * SearchDateFieldOperator.
 */
class SearchDateFieldOperator
{
    public static $paramtypesmap = [
    ];
    /**
     * @var string
     */
    const after = 'after';
    /**
     * @var string
     */
    const before = 'before';
    /**
     * @var string
     */
    const NSempty = 'empty';
    /**
     * @var string
     */
    const notAfter = 'notAfter';
    /**
     * @var string
     */
    const notBefore = 'notBefore';
    /**
     * @var string
     */
    const notEmpty = 'notEmpty';
    /**
     * @var string
     */
    const notOn = 'notOn';
    /**
     * @var string
     */
    const notOnOrAfter = 'notOnOrAfter';
    /**
     * @var string
     */
    const notOnOrBefore = 'notOnOrBefore';
    /**
     * @var string
     */
    const notWithin = 'notWithin';
    /**
     * @var string
     */
    const on = 'on';
    /**
     * @var string
     */
    const onOrAfter = 'onOrAfter';
    /**
     * @var string
     */
    const onOrBefore = 'onOrBefore';
    /**
     * @var string
     */
    const within = 'within';
}
