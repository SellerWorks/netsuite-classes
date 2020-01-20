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
 * CustomerSubsidiaryRelationshipSearchRowBasic
 */
class CustomerSubsidiaryRelationshipSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $depositbalance;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isprimarysub;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $primaryCurrency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unbilledorders;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"balance" => "SearchColumnDoubleField[]",
		"depositbalance" => "SearchColumnDoubleField[]",
		"entity" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isprimarysub" => "SearchColumnBooleanField[]",
		"primaryCurrency" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"unbilledorders" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}
