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
 * RevRecTemplateSearchRowBasic
 */
class RevRecTemplateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorMethod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorPeriod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorStartOffset;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorTermSrc;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $contraAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $deferralAccount;
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
	 * @var SearchColumnStringField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $targetAccount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"amorMethod" => "SearchColumnStringField[]",
		"amorPeriod" => "SearchColumnStringField[]",
		"amorStartOffset" => "SearchColumnStringField[]",
		"amorTermSrc" => "SearchColumnStringField[]",
		"amorType" => "SearchColumnStringField[]",
		"contraAccount" => "SearchColumnStringField[]",
		"deferralAccount" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"periodOffset" => "SearchColumnStringField[]",
		"targetAccount" => "SearchColumnStringField[]",
		"useForeignAmounts" => "SearchColumnBooleanField[]",
	);
}
