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
 * CampaignResponseResponses.
 */
class CampaignResponseResponses
{
    /**
     * @var string
     */
    public $response;
    /**
     * @var string
     */
    public $responseDate;
    /**
     * @var string
     */
    public $author;
    /**
     * @var string
     */
    public $note;

    public static $paramtypesmap = array(
        'response' => 'string',
        'responseDate' => 'string',
        'author' => 'string',
        'note' => 'string',
    );
}
