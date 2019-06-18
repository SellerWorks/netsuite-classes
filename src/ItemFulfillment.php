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
 * ItemFulfillment.
 */
class ItemFulfillment extends Record
{
    /**
     * @var dateTime
     */
    public $createdDate;
    /**
     * @var dateTime
     */
    public $lastModifiedDate;
    /**
     * @var RecordRef
     */
    public $customForm;
    /**
     * @var RecordRef
     */
    public $postingPeriod;
    /**
     * @var RecordRef
     */
    public $entity;
    /**
     * @var RecordRef
     */
    public $createdFrom;
    /**
     * @var RecordRef
     */
    public $requestedBy;
    /**
     * @var int
     */
    public $createdFromShipGroup;
    /**
     * @var RecordRef
     */
    public $partner;
    /**
     * @var Address
     */
    public $shippingAddress;
    /**
     * @var dateTime
     */
    public $pickedDate;
    /**
     * @var dateTime
     */
    public $packedDate;
    /**
     * @var dateTime
     */
    public $shippedDate;
    /**
     * @var bool
     */
    public $shipIsResidential;
    /**
     * @var RecordRef
     */
    public $shipAddressList;
    /**
     * @var ItemFulfillmentShipStatus
     */
    public $shipStatus;
    /**
     * @var bool
     */
    public $saturdayDeliveryUps;
    /**
     * @var bool
     */
    public $sendShipNotifyEmailUps;
    /**
     * @var bool
     */
    public $sendBackupEmailUps;
    /**
     * @var string
     */
    public $shipNotifyEmailAddressUps;
    /**
     * @var string
     */
    public $shipNotifyEmailAddress2Ups;
    /**
     * @var string
     */
    public $backupEmailAddressUps;
    /**
     * @var string
     */
    public $shipNotifyEmailMessageUps;
    /**
     * @var string
     */
    public $thirdPartyAcctUps;
    /**
     * @var string
     */
    public $thirdPartyZipcodeUps;
    /**
     * @var Country
     */
    public $thirdPartyCountryUps;
    /**
     * @var ItemFulfillmentThirdPartyTypeUps
     */
    public $thirdPartyTypeUps;
    /**
     * @var bool
     */
    public $partiesToTransactionUps;
    /**
     * @var ItemFulfillmentExportTypeUps
     */
    public $exportTypeUps;
    /**
     * @var ItemFulfillmentMethodOfTransportUps
     */
    public $methodOfTransportUps;
    /**
     * @var string
     */
    public $carrierIdUps;
    /**
     * @var string
     */
    public $entryNumberUps;
    /**
     * @var string
     */
    public $inbondCodeUps;
    /**
     * @var bool
     */
    public $isRoutedExportTransactionUps;
    /**
     * @var string
     */
    public $licenseNumberUps;
    /**
     * @var dateTime
     */
    public $licenseDateUps;
    /**
     * @var ItemFulfillmentLicenseExceptionUps
     */
    public $licenseExceptionUps;
    /**
     * @var string
     */
    public $eccNumberUps;
    /**
     * @var string
     */
    public $recipientTaxIdUps;
    /**
     * @var dateTime
     */
    public $blanketStartDateUps;
    /**
     * @var dateTime
     */
    public $blanketEndDateUps;
    /**
     * @var float
     */
    public $shipmentWeightUps;
    /**
     * @var bool
     */
    public $saturdayDeliveryFedEx;
    /**
     * @var bool
     */
    public $saturdayPickupFedex;
    /**
     * @var bool
     */
    public $sendShipNotifyEmailFedEx;
    /**
     * @var bool
     */
    public $sendBackupEmailFedEx;
    /**
     * @var bool
     */
    public $signatureHomeDeliveryFedEx;
    /**
     * @var string
     */
    public $shipNotifyEmailAddressFedEx;
    /**
     * @var string
     */
    public $backupEmailAddressFedEx;
    /**
     * @var dateTime
     */
    public $shipDateFedEx;
    /**
     * @var ItemFulfillmentHomeDeliveryTypeFedEx
     */
    public $homeDeliveryTypeFedEx;
    /**
     * @var dateTime
     */
    public $homeDeliveryDateFedEx;
    /**
     * @var string
     */
    public $bookingConfirmationNumFedEx;
    /**
     * @var string
     */
    public $intlExemptionNumFedEx;
    /**
     * @var ItemFulfillmentB13AFilingOptionFedEx
     */
    public $b13aFilingOptionFedEx;
    /**
     * @var string
     */
    public $b13aStatementDataFedEx;
    /**
     * @var string
     */
    public $thirdPartyAcctFedEx;
    /**
     * @var Country
     */
    public $thirdPartyCountryFedEx;
    /**
     * @var ItemFulfillmentThirdPartyTypeFedEx
     */
    public $thirdPartyTypeFedEx;
    /**
     * @var float
     */
    public $shipmentWeightFedEx;
    /**
     * @var ItemFulfillmentTermsOfSaleFedEx
     */
    public $termsOfSaleFedEx;
    /**
     * @var float
     */
    public $termsFreightChargeFedEx;
    /**
     * @var float
     */
    public $termsInsuranceChargeFedEx;
    /**
     * @var bool
     */
    public $insideDeliveryFedEx;
    /**
     * @var bool
     */
    public $insidePickupFedEx;
    /**
     * @var ItemFulfillmentAncillaryEndorsementFedEx
     */
    public $ancillaryEndorsementFedEx;
    /**
     * @var bool
     */
    public $holdAtLocationFedEx;
    /**
     * @var string
     */
    public $halPhoneFedEx;
    /**
     * @var string
     */
    public $halAddr1FedEx;
    /**
     * @var string
     */
    public $halAddr2FedEx;
    /**
     * @var string
     */
    public $halAddr3FedEx;
    /**
     * @var string
     */
    public $halCityFedEx;
    /**
     * @var string
     */
    public $halZipFedEx;
    /**
     * @var string
     */
    public $halStateFedEx;
    /**
     * @var string
     */
    public $halCountryFedEx;
    /**
     * @var ItemFulfillmentHazmatTypeFedEx
     */
    public $hazmatTypeFedEx;
    /**
     * @var ItemFulfillmentAccessibilityTypeFedEx
     */
    public $accessibilityTypeFedEx;
    /**
     * @var bool
     */
    public $isCargoAircraftOnlyFedEx;
    /**
     * @var dateTime
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var RecordRef
     */
    public $shipMethod;
    /**
     * @var bool
     */
    public $generateIntegratedShipperLabel;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var RecordRef
     */
    public $transferLocation;
    /**
     * @var ItemFulfillmentPackageList
     */
    public $packageList;
    /**
     * @var ItemFulfillmentPackageUpsList
     */
    public $packageUpsList;
    /**
     * @var ItemFulfillmentPackageUspsList
     */
    public $packageUspsList;
    /**
     * @var ItemFulfillmentPackageFedExList
     */
    public $packageFedExList;
    /**
     * @var ItemFulfillmentItemList
     */
    public $itemList;
    /**
     * @var AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;

    public static $paramtypesmap = [
        'createdDate' => 'dateTime',
        'lastModifiedDate' => 'dateTime',
        'customForm' => 'RecordRef',
        'postingPeriod' => 'RecordRef',
        'entity' => 'RecordRef',
        'createdFrom' => 'RecordRef',
        'requestedBy' => 'RecordRef',
        'createdFromShipGroup' => 'integer',
        'partner' => 'RecordRef',
        'shippingAddress' => 'Address',
        'pickedDate' => 'dateTime',
        'packedDate' => 'dateTime',
        'shippedDate' => 'dateTime',
        'shipIsResidential' => 'boolean',
        'shipAddressList' => 'RecordRef',
        'shipStatus' => 'ItemFulfillmentShipStatus',
        'saturdayDeliveryUps' => 'boolean',
        'sendShipNotifyEmailUps' => 'boolean',
        'sendBackupEmailUps' => 'boolean',
        'shipNotifyEmailAddressUps' => 'string',
        'shipNotifyEmailAddress2Ups' => 'string',
        'backupEmailAddressUps' => 'string',
        'shipNotifyEmailMessageUps' => 'string',
        'thirdPartyAcctUps' => 'string',
        'thirdPartyZipcodeUps' => 'string',
        'thirdPartyCountryUps' => 'Country',
        'thirdPartyTypeUps' => 'ItemFulfillmentThirdPartyTypeUps',
        'partiesToTransactionUps' => 'boolean',
        'exportTypeUps' => 'ItemFulfillmentExportTypeUps',
        'methodOfTransportUps' => 'ItemFulfillmentMethodOfTransportUps',
        'carrierIdUps' => 'string',
        'entryNumberUps' => 'string',
        'inbondCodeUps' => 'string',
        'isRoutedExportTransactionUps' => 'boolean',
        'licenseNumberUps' => 'string',
        'licenseDateUps' => 'dateTime',
        'licenseExceptionUps' => 'ItemFulfillmentLicenseExceptionUps',
        'eccNumberUps' => 'string',
        'recipientTaxIdUps' => 'string',
        'blanketStartDateUps' => 'dateTime',
        'blanketEndDateUps' => 'dateTime',
        'shipmentWeightUps' => 'float',
        'saturdayDeliveryFedEx' => 'boolean',
        'saturdayPickupFedex' => 'boolean',
        'sendShipNotifyEmailFedEx' => 'boolean',
        'sendBackupEmailFedEx' => 'boolean',
        'signatureHomeDeliveryFedEx' => 'boolean',
        'shipNotifyEmailAddressFedEx' => 'string',
        'backupEmailAddressFedEx' => 'string',
        'shipDateFedEx' => 'dateTime',
        'homeDeliveryTypeFedEx' => 'ItemFulfillmentHomeDeliveryTypeFedEx',
        'homeDeliveryDateFedEx' => 'dateTime',
        'bookingConfirmationNumFedEx' => 'string',
        'intlExemptionNumFedEx' => 'string',
        'b13aFilingOptionFedEx' => 'ItemFulfillmentB13AFilingOptionFedEx',
        'b13aStatementDataFedEx' => 'string',
        'thirdPartyAcctFedEx' => 'string',
        'thirdPartyCountryFedEx' => 'Country',
        'thirdPartyTypeFedEx' => 'ItemFulfillmentThirdPartyTypeFedEx',
        'shipmentWeightFedEx' => 'float',
        'termsOfSaleFedEx' => 'ItemFulfillmentTermsOfSaleFedEx',
        'termsFreightChargeFedEx' => 'float',
        'termsInsuranceChargeFedEx' => 'float',
        'insideDeliveryFedEx' => 'boolean',
        'insidePickupFedEx' => 'boolean',
        'ancillaryEndorsementFedEx' => 'ItemFulfillmentAncillaryEndorsementFedEx',
        'holdAtLocationFedEx' => 'boolean',
        'halPhoneFedEx' => 'string',
        'halAddr1FedEx' => 'string',
        'halAddr2FedEx' => 'string',
        'halAddr3FedEx' => 'string',
        'halCityFedEx' => 'string',
        'halZipFedEx' => 'string',
        'halStateFedEx' => 'string',
        'halCountryFedEx' => 'string',
        'hazmatTypeFedEx' => 'ItemFulfillmentHazmatTypeFedEx',
        'accessibilityTypeFedEx' => 'ItemFulfillmentAccessibilityTypeFedEx',
        'isCargoAircraftOnlyFedEx' => 'boolean',
        'tranDate' => 'dateTime',
        'tranId' => 'string',
        'shipMethod' => 'RecordRef',
        'generateIntegratedShipperLabel' => 'boolean',
        'shippingCost' => 'float',
        'handlingCost' => 'float',
        'memo' => 'string',
        'transferLocation' => 'RecordRef',
        'packageList' => 'ItemFulfillmentPackageList',
        'packageUpsList' => 'ItemFulfillmentPackageUpsList',
        'packageUspsList' => 'ItemFulfillmentPackageUspsList',
        'packageFedExList' => 'ItemFulfillmentPackageFedExList',
        'itemList' => 'ItemFulfillmentItemList',
        'accountingBookDetailList' => 'AccountingBookDetailList',
        'customFieldList' => 'CustomFieldList',
        'internalId' => 'string',
        'externalId' => 'string',
    ];
}
