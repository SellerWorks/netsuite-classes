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
 * LanguageValue.
 */
class LanguageValue
{
    /**
     * @var Language
     */
    public $locale;
    /**
     * @var string
     */
    public $value;

    public static $paramtypesmap = [
        'locale' => 'Language',
        'value' => 'string',
    ];
}
