<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * CampaignResponseResponses
 */
class CampaignResponseResponses {
	/**
	 * @access public
	 * @var string
	 */
	public $response;
	/**
	 * @access public
	 * @var string
	 */
	public $responseDate;
	/**
	 * @access public
	 * @var string
	 */
	public $author;
	/**
	 * @access public
	 * @var string
	 */
	public $note;

	static $paramtypesmap = array(
		"response" => "string",
		"responseDate" => "string",
		"author" => "string",
		"note" => "string",
	);
}
