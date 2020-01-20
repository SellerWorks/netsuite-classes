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
 * CampaignResponse
 */
class CampaignResponse extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $campaignEvent;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $campaignResponseDate;
	/**
	 * @access public
	 * @var string
	 */
	public $channel;
	/**
	 * @access public
	 * @var CampaignResponseResponse
	 */
	public $response;
	/**
	 * @access public
	 * @var string
	 */
	public $note;
	/**
	 * @access public
	 * @var CampaignResponseResponsesList
	 */
	public $responsesList;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"entity" => "RecordRef",
		"leadSource" => "RecordRef",
		"campaignEvent" => "RecordRef",
		"campaignResponseDate" => "dateTime",
		"channel" => "string",
		"response" => "CampaignResponseResponse",
		"note" => "string",
		"responsesList" => "CampaignResponseResponsesList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
