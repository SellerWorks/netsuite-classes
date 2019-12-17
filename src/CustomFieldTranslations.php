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
 * CustomFieldTranslations
 */
class CustomFieldTranslations
{
    /**
     * @access public
     * @var Language
     */
    public $locale;
    /**
     * @access public
     * @var string
     */
    public $localeDescription;
    /**
     * @access public
     * @var string
     */
    public $label;
    /**
     * @access public
     * @var string
     */
    public $help;

    public static $paramtypesmap = array(
        "locale" => "Language",
        "localeDescription" => "string",
        "label" => "string",
        "help" => "string",
    );
}
