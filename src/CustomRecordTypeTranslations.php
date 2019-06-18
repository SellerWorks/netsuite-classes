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
 * CustomRecordTypeTranslations.
 */
class CustomRecordTypeTranslations
{
    /**
     * @var Language
     */
    public $locale;
    /**
     * @var string
     */
    public $localeDescription;
    /**
     * @var string
     */
    public $name;

    public static $paramtypesmap = [
        'locale' => 'Language',
        'localeDescription' => 'string',
        'name' => 'string',
    ];
}
