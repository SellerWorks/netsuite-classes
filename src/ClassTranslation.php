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
 * ClassTranslation.
 */
class ClassTranslation
{
    /**
     * @var string
     */
    public $locale;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $name;

    public static $paramtypesmap = [
        'locale' => 'string',
        'language' => 'string',
        'name' => 'string',
    ];
}
