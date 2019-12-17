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
 * CustomRecordTranslations.
 */
class CustomRecordTranslations
{
    /**
     * @var Language
     */
    public $locale;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $label;

    public static $paramtypesmap = [
        'locale' => 'Language',
        'language' => 'string',
        'label' => 'string',
    ];
}
