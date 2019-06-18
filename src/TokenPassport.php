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
 * TokenPassport.
 */
class TokenPassport
{
    /**
     * @var string
     */
    public $account;
    /**
     * @var string
     */
    public $consumerKey;
    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $nonce;
    /**
     * @var int
     */
    public $timestamp;
    /**
     * @var TokenPassportSignature
     */
    public $signature;

    public static $paramtypesmap = array(
        'account' => 'string',
        'consumerKey' => 'string',
        'token' => 'string',
        'nonce' => 'string',
        'timestamp' => 'integer',
        'signature' => 'TokenPassportSignature',
    );
}
