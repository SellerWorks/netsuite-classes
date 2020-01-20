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
 * LocationTimeZone
 */
class LocationTimeZone {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _africaCairo = "_africaCairo";
	/**
	 * @var string
	 */
	const _africaCasablanca = "_africaCasablanca";
	/**
	 * @var string
	 */
	const _africaJohannesburg = "_africaJohannesburg";
	/**
	 * @var string
	 */
	const _africaNairobi = "_africaNairobi";
	/**
	 * @var string
	 */
	const _africaTunis = "_africaTunis";
	/**
	 * @var string
	 */
	const _africaWindhoek = "_africaWindhoek";
	/**
	 * @var string
	 */
	const _americaAnchorage = "_americaAnchorage";
	/**
	 * @var string
	 */
	const _americaArgentinaBuenosAires = "_americaArgentinaBuenosAires";
	/**
	 * @var string
	 */
	const _americaBogota = "_americaBogota";
	/**
	 * @var string
	 */
	const _americaCaracas = "_americaCaracas";
	/**
	 * @var string
	 */
	const _americaCayenne = "_americaCayenne";
	/**
	 * @var string
	 */
	const _americaChicago = "_americaChicago";
	/**
	 * @var string
	 */
	const _americaChihuahua = "_americaChihuahua";
	/**
	 * @var string
	 */
	const _americaDenver = "_americaDenver";
	/**
	 * @var string
	 */
	const _americaGodthab = "_americaGodthab";
	/**
	 * @var string
	 */
	const _americaGuatemala = "_americaGuatemala";
	/**
	 * @var string
	 */
	const _americaHalifax = "_americaHalifax";
	/**
	 * @var string
	 */
	const _americaIndianaIndianapolis = "_americaIndianaIndianapolis";
	/**
	 * @var string
	 */
	const _americaLaPaz = "_americaLaPaz";
	/**
	 * @var string
	 */
	const _americaLosAngeles = "_americaLosAngeles";
	/**
	 * @var string
	 */
	const _americaManaus = "_americaManaus";
	/**
	 * @var string
	 */
	const _americaMexicoCity = "_americaMexicoCity";
	/**
	 * @var string
	 */
	const _americaMontevideo = "_americaMontevideo";
	/**
	 * @var string
	 */
	const _americaNewYork = "_americaNewYork";
	/**
	 * @var string
	 */
	const _americaNoronha = "_americaNoronha";
	/**
	 * @var string
	 */
	const _americaPhoenix = "_americaPhoenix";
	/**
	 * @var string
	 */
	const _americaRegina = "_americaRegina";
	/**
	 * @var string
	 */
	const _americaSantiago = "_americaSantiago";
	/**
	 * @var string
	 */
	const _americaSaoPaulo = "_americaSaoPaulo";
	/**
	 * @var string
	 */
	const _americaStJohns = "_americaStJohns";
	/**
	 * @var string
	 */
	const _americaTijuana = "_americaTijuana";
	/**
	 * @var string
	 */
	const _asiaAlmaty = "_asiaAlmaty";
	/**
	 * @var string
	 */
	const _asiaAmman = "_asiaAmman";
	/**
	 * @var string
	 */
	const _asiaBaghdad = "_asiaBaghdad";
	/**
	 * @var string
	 */
	const _asiaBaku = "_asiaBaku";
	/**
	 * @var string
	 */
	const _asiaBangkok = "_asiaBangkok";
	/**
	 * @var string
	 */
	const _asiaBeirut = "_asiaBeirut";
	/**
	 * @var string
	 */
	const _asiaDhaka = "_asiaDhaka";
	/**
	 * @var string
	 */
	const _asiaHongKong = "_asiaHongKong";
	/**
	 * @var string
	 */
	const _asiaIrkutsk = "_asiaIrkutsk";
	/**
	 * @var string
	 */
	const _asiaJerusalem = "_asiaJerusalem";
	/**
	 * @var string
	 */
	const _asiaKabul = "_asiaKabul";
	/**
	 * @var string
	 */
	const _asiaKarachi = "_asiaKarachi";
	/**
	 * @var string
	 */
	const _asiaKathmandu = "_asiaKathmandu";
	/**
	 * @var string
	 */
	const _asiaKolkata = "_asiaKolkata";
	/**
	 * @var string
	 */
	const _asiaKrasnoyarsk = "_asiaKrasnoyarsk";
	/**
	 * @var string
	 */
	const _asiaKualaLumpur = "_asiaKualaLumpur";
	/**
	 * @var string
	 */
	const _asiaMagadan = "_asiaMagadan";
	/**
	 * @var string
	 */
	const _asiaManila = "_asiaManila";
	/**
	 * @var string
	 */
	const _asiaMuscat = "_asiaMuscat";
	/**
	 * @var string
	 */
	const _asiaRangoon = "_asiaRangoon";
	/**
	 * @var string
	 */
	const _asiaRiyadh = "_asiaRiyadh";
	/**
	 * @var string
	 */
	const _asiaSeoul = "_asiaSeoul";
	/**
	 * @var string
	 */
	const _asiaTaipei = "_asiaTaipei";
	/**
	 * @var string
	 */
	const _asiaTashkent = "_asiaTashkent";
	/**
	 * @var string
	 */
	const _asiaTbilisi = "_asiaTbilisi";
	/**
	 * @var string
	 */
	const _asiaTehran = "_asiaTehran";
	/**
	 * @var string
	 */
	const _asiaTokyo = "_asiaTokyo";
	/**
	 * @var string
	 */
	const _asiaVladivostok = "_asiaVladivostok";
	/**
	 * @var string
	 */
	const _asiaYakutsk = "_asiaYakutsk";
	/**
	 * @var string
	 */
	const _asiaYekaterinburg = "_asiaYekaterinburg";
	/**
	 * @var string
	 */
	const _asiaYerevan = "_asiaYerevan";
	/**
	 * @var string
	 */
	const _atlanticAzores = "_atlanticAzores";
	/**
	 * @var string
	 */
	const _atlanticCapeVerde = "_atlanticCapeVerde";
	/**
	 * @var string
	 */
	const _atlanticReykjavik = "_atlanticReykjavik";
	/**
	 * @var string
	 */
	const _australiaAdelaide = "_australiaAdelaide";
	/**
	 * @var string
	 */
	const _australiaBrisbane = "_australiaBrisbane";
	/**
	 * @var string
	 */
	const _australiaDarwin = "_australiaDarwin";
	/**
	 * @var string
	 */
	const _australiaHobart = "_australiaHobart";
	/**
	 * @var string
	 */
	const _australiaPerth = "_australiaPerth";
	/**
	 * @var string
	 */
	const _australiaSydney = "_australiaSydney";
	/**
	 * @var string
	 */
	const _etcGmtPlus12 = "_etcGmtPlus12";
	/**
	 * @var string
	 */
	const _europeAmsterdam = "_europeAmsterdam";
	/**
	 * @var string
	 */
	const _europeBudapest = "_europeBudapest";
	/**
	 * @var string
	 */
	const _europeIstanbul = "_europeIstanbul";
	/**
	 * @var string
	 */
	const _europeKiev = "_europeKiev";
	/**
	 * @var string
	 */
	const _europeLondon = "_europeLondon";
	/**
	 * @var string
	 */
	const _europeMinsk = "_europeMinsk";
	/**
	 * @var string
	 */
	const _europeMoscow = "_europeMoscow";
	/**
	 * @var string
	 */
	const _europeParis = "_europeParis";
	/**
	 * @var string
	 */
	const _europeWarsaw = "_europeWarsaw";
	/**
	 * @var string
	 */
	const _pacificAuckland = "_pacificAuckland";
	/**
	 * @var string
	 */
	const _pacificGuam = "_pacificGuam";
	/**
	 * @var string
	 */
	const _pacificHonolulu = "_pacificHonolulu";
	/**
	 * @var string
	 */
	const _pacificKwajalein = "_pacificKwajalein";
	/**
	 * @var string
	 */
	const _pacificPagoPago = "_pacificPagoPago";
	/**
	 * @var string
	 */
	const _pacificTongatapu = "_pacificTongatapu";
}
