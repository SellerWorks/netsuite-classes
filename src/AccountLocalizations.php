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
 * AccountLocalizations.
 */
class AccountLocalizations
{
    /**
     * @var RecordRef
     */
    public $accountingContext;
    /**
     * @var string
     */
    public $acctNumber;
    /**
     * @var string
     */
    public $acctName;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var Language
     */
    public $locale;

    public static $paramtypesmap = [
        'accountingContext' => 'RecordRef',
        'acctNumber' => 'string',
        'acctName' => 'string',
        'legalName' => 'string',
        'locale' => 'Language',
    ];
}
