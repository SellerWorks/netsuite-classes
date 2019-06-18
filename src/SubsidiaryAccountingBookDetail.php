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
 * SubsidiaryAccountingBookDetail.
 */
class SubsidiaryAccountingBookDetail
{
    /**
     * @var RecordRef
     */
    public $accountingBook;
    /**
     * @var RecordRef
     */
    public $currency;
    /**
     * @var AccountingBookStatus
     */
    public $bookStatus;

    public static $paramtypesmap = array(
        'accountingBook' => 'RecordRef',
        'currency' => 'RecordRef',
        'bookStatus' => 'AccountingBookStatus',
    );
}
