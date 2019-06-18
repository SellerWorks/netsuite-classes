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
 * CustomFieldTranslations.
 */
class CustomFieldTranslations
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
    public $label;
    /**
     * @var string
     */
    public $help;

    public static $paramtypesmap = array(
        'locale' => 'Language',
        'localeDescription' => 'string',
        'label' => 'string',
        'help' => 'string',
    );
}
