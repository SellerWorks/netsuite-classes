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
 * SearchStringFieldOperator.
 */
class SearchStringFieldOperator
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const contains = 'contains';
    /**
     * @var string
     */
    const doesNotContain = 'doesNotContain';
    /**
     * @var string
     */
    const doesNotStartWith = 'doesNotStartWith';
    /**
     * @var string
     */
    const NSempty = 'empty';
    /**
     * @var string
     */
    const hasKeywords = 'hasKeywords';
    /**
     * @var string
     */
    const is = 'is';
    /**
     * @var string
     */
    const isNot = 'isNot';
    /**
     * @var string
     */
    const notEmpty = 'notEmpty';
    /**
     * @var string
     */
    const startsWith = 'startsWith';
}
