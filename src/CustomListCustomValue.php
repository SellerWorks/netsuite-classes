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
 * CustomListCustomValue.
 */
class CustomListCustomValue
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $abbreviation;
    /**
     * @var bool
     */
    public $isInactive;
    /**
     * @var int
     */
    public $valueId;
    /**
     * @var LanguageValueList
     */
    public $valueLanguageValueList;

    public static $paramtypesmap = [
        'value' => 'string',
        'abbreviation' => 'string',
        'isInactive' => 'boolean',
        'valueId' => 'integer',
        'valueLanguageValueList' => 'LanguageValueList',
    ];
}
