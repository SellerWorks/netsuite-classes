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
 * EmployeeCompensationCurrency.
 */
class EmployeeCompensationCurrency
{
    public static $paramtypesmap = array(
    );
    /**
     * @var string
     */
    const _aed = '_aed';
    /**
     * @var string
     */
    const _afa = '_afa';
    /**
     * @var string
     */
    const _afn = '_afn';
    /**
     * @var string
     */
    const _all = '_all';
    /**
     * @var string
     */
    const _amd = '_amd';
    /**
     * @var string
     */
    const _ang = '_ang';
    /**
     * @var string
     */
    const _aoa = '_aoa';
    /**
     * @var string
     */
    const _ars = '_ars';
    /**
     * @var string
     */
    const _aud = '_aud';
    /**
     * @var string
     */
    const _awg = '_awg';
    /**
     * @var string
     */
    const _azn = '_azn';
    /**
     * @var string
     */
    const _bam = '_bam';
    /**
     * @var string
     */
    const _bbd = '_bbd';
    /**
     * @var string
     */
    const _bdt = '_bdt';
    /**
     * @var string
     */
    const _bgn = '_bgn';
    /**
     * @var string
     */
    const _bhd = '_bhd';
    /**
     * @var string
     */
    const _bif = '_bif';
    /**
     * @var string
     */
    const _bmd = '_bmd';
    /**
     * @var string
     */
    const _bnd = '_bnd';
    /**
     * @var string
     */
    const _bob = '_bob';
    /**
     * @var string
     */
    const _brl = '_brl';
    /**
     * @var string
     */
    const _bsd = '_bsd';
    /**
     * @var string
     */
    const _btn = '_btn';
    /**
     * @var string
     */
    const _bwp = '_bwp';
    /**
     * @var string
     */
    const _byn = '_byn';
    /**
     * @var string
     */
    const _byr = '_byr';
    /**
     * @var string
     */
    const _bzd = '_bzd';
    /**
     * @var string
     */
    const _cad = '_cad';
    /**
     * @var string
     */
    const _cdf = '_cdf';
    /**
     * @var string
     */
    const _chf = '_chf';
    /**
     * @var string
     */
    const _clp = '_clp';
    /**
     * @var string
     */
    const _cny = '_cny';
    /**
     * @var string
     */
    const _cop = '_cop';
    /**
     * @var string
     */
    const _crc = '_crc';
    /**
     * @var string
     */
    const _csd = '_csd';
    /**
     * @var string
     */
    const _cuc = '_cuc';
    /**
     * @var string
     */
    const _cup = '_cup';
    /**
     * @var string
     */
    const _cve = '_cve';
    /**
     * @var string
     */
    const _cyp = '_cyp';
    /**
     * @var string
     */
    const _czk = '_czk';
    /**
     * @var string
     */
    const _djf = '_djf';
    /**
     * @var string
     */
    const _dkk = '_dkk';
    /**
     * @var string
     */
    const _dop = '_dop';
    /**
     * @var string
     */
    const _dzd = '_dzd';
    /**
     * @var string
     */
    const _ecs = '_ecs';
    /**
     * @var string
     */
    const _eek = '_eek';
    /**
     * @var string
     */
    const _egp = '_egp';
    /**
     * @var string
     */
    const _ern = '_ern';
    /**
     * @var string
     */
    const _etb = '_etb';
    /**
     * @var string
     */
    const _eur = '_eur';
    /**
     * @var string
     */
    const _fjd = '_fjd';
    /**
     * @var string
     */
    const _fkp = '_fkp';
    /**
     * @var string
     */
    const _gbp = '_gbp';
    /**
     * @var string
     */
    const _gel = '_gel';
    /**
     * @var string
     */
    const _ggp = '_ggp';
    /**
     * @var string
     */
    const _ghc = '_ghc';
    /**
     * @var string
     */
    const _ghs = '_ghs';
    /**
     * @var string
     */
    const _gip = '_gip';
    /**
     * @var string
     */
    const _gmd = '_gmd';
    /**
     * @var string
     */
    const _gnf = '_gnf';
    /**
     * @var string
     */
    const _gtq = '_gtq';
    /**
     * @var string
     */
    const _gyd = '_gyd';
    /**
     * @var string
     */
    const _hkd = '_hkd';
    /**
     * @var string
     */
    const _hnl = '_hnl';
    /**
     * @var string
     */
    const _hrk = '_hrk';
    /**
     * @var string
     */
    const _htg = '_htg';
    /**
     * @var string
     */
    const _huf = '_huf';
    /**
     * @var string
     */
    const _idr = '_idr';
    /**
     * @var string
     */
    const _ils = '_ils';
    /**
     * @var string
     */
    const _imp = '_imp';
    /**
     * @var string
     */
    const _inr = '_inr';
    /**
     * @var string
     */
    const _iqd = '_iqd';
    /**
     * @var string
     */
    const _irr = '_irr';
    /**
     * @var string
     */
    const _isk = '_isk';
    /**
     * @var string
     */
    const _jep = '_jep';
    /**
     * @var string
     */
    const _jmd = '_jmd';
    /**
     * @var string
     */
    const _jod = '_jod';
    /**
     * @var string
     */
    const _jpy = '_jpy';
    /**
     * @var string
     */
    const _kes = '_kes';
    /**
     * @var string
     */
    const _kgs = '_kgs';
    /**
     * @var string
     */
    const _khr = '_khr';
    /**
     * @var string
     */
    const _kmf = '_kmf';
    /**
     * @var string
     */
    const _kpw = '_kpw';
    /**
     * @var string
     */
    const _krw = '_krw';
    /**
     * @var string
     */
    const _kwd = '_kwd';
    /**
     * @var string
     */
    const _kyd = '_kyd';
    /**
     * @var string
     */
    const _kzt = '_kzt';
    /**
     * @var string
     */
    const _lak = '_lak';
    /**
     * @var string
     */
    const _lbp = '_lbp';
    /**
     * @var string
     */
    const _lkr = '_lkr';
    /**
     * @var string
     */
    const _lrd = '_lrd';
    /**
     * @var string
     */
    const _lsl = '_lsl';
    /**
     * @var string
     */
    const _ltl = '_ltl';
    /**
     * @var string
     */
    const _lvl = '_lvl';
    /**
     * @var string
     */
    const _lyd = '_lyd';
    /**
     * @var string
     */
    const _mad = '_mad';
    /**
     * @var string
     */
    const _mdl = '_mdl';
    /**
     * @var string
     */
    const _mfg = '_mfg';
    /**
     * @var string
     */
    const _mga = '_mga';
    /**
     * @var string
     */
    const _mkd = '_mkd';
    /**
     * @var string
     */
    const _mmk = '_mmk';
    /**
     * @var string
     */
    const _mnt = '_mnt';
    /**
     * @var string
     */
    const _mop = '_mop';
    /**
     * @var string
     */
    const _mro = '_mro';
    /**
     * @var string
     */
    const _mru = '_mru';
    /**
     * @var string
     */
    const _mtl = '_mtl';
    /**
     * @var string
     */
    const _mur = '_mur';
    /**
     * @var string
     */
    const _mvr = '_mvr';
    /**
     * @var string
     */
    const _mwk = '_mwk';
    /**
     * @var string
     */
    const _mxn = '_mxn';
    /**
     * @var string
     */
    const _myr = '_myr';
    /**
     * @var string
     */
    const _mzm = '_mzm';
    /**
     * @var string
     */
    const _mzn = '_mzn';
    /**
     * @var string
     */
    const _nad = '_nad';
    /**
     * @var string
     */
    const _ngn = '_ngn';
    /**
     * @var string
     */
    const _nio = '_nio';
    /**
     * @var string
     */
    const _nok = '_nok';
    /**
     * @var string
     */
    const _npr = '_npr';
    /**
     * @var string
     */
    const _nzd = '_nzd';
    /**
     * @var string
     */
    const _omr = '_omr';
    /**
     * @var string
     */
    const _pab = '_pab';
    /**
     * @var string
     */
    const _pen = '_pen';
    /**
     * @var string
     */
    const _pgk = '_pgk';
    /**
     * @var string
     */
    const _php = '_php';
    /**
     * @var string
     */
    const _pkr = '_pkr';
    /**
     * @var string
     */
    const _pln = '_pln';
    /**
     * @var string
     */
    const _pyg = '_pyg';
    /**
     * @var string
     */
    const _qar = '_qar';
    /**
     * @var string
     */
    const _rol = '_rol';
    /**
     * @var string
     */
    const _ron = '_ron';
    /**
     * @var string
     */
    const _rsd = '_rsd';
    /**
     * @var string
     */
    const _rub = '_rub';
    /**
     * @var string
     */
    const _rur = '_rur';
    /**
     * @var string
     */
    const _rwf = '_rwf';
    /**
     * @var string
     */
    const _sar = '_sar';
    /**
     * @var string
     */
    const _sbd = '_sbd';
    /**
     * @var string
     */
    const _scr = '_scr';
    /**
     * @var string
     */
    const _sdd = '_sdd';
    /**
     * @var string
     */
    const _sdg = '_sdg';
    /**
     * @var string
     */
    const _sek = '_sek';
    /**
     * @var string
     */
    const _sgd = '_sgd';
    /**
     * @var string
     */
    const _shp = '_shp';
    /**
     * @var string
     */
    const _sit = '_sit';
    /**
     * @var string
     */
    const _skk = '_skk';
    /**
     * @var string
     */
    const _sll = '_sll';
    /**
     * @var string
     */
    const _sos = '_sos';
    /**
     * @var string
     */
    const _spl = '_spl';
    /**
     * @var string
     */
    const _srd = '_srd';
    /**
     * @var string
     */
    const _srg = '_srg';
    /**
     * @var string
     */
    const _ssp = '_ssp';
    /**
     * @var string
     */
    const _std = '_std';
    /**
     * @var string
     */
    const _stn = '_stn';
    /**
     * @var string
     */
    const _svc = '_svc';
    /**
     * @var string
     */
    const _syp = '_syp';
    /**
     * @var string
     */
    const _szl = '_szl';
    /**
     * @var string
     */
    const _thb = '_thb';
    /**
     * @var string
     */
    const _tjs = '_tjs';
    /**
     * @var string
     */
    const _tmm = '_tmm';
    /**
     * @var string
     */
    const _tmt = '_tmt';
    /**
     * @var string
     */
    const _tnd = '_tnd';
    /**
     * @var string
     */
    const _top = '_top';
    /**
     * @var string
     */
    const _trl = '_trl';
    /**
     * @var string
     */
    const _try = '_try';
    /**
     * @var string
     */
    const _ttd = '_ttd';
    /**
     * @var string
     */
    const _tvd = '_tvd';
    /**
     * @var string
     */
    const _twd = '_twd';
    /**
     * @var string
     */
    const _tzs = '_tzs';
    /**
     * @var string
     */
    const _uah = '_uah';
    /**
     * @var string
     */
    const _ugx = '_ugx';
    /**
     * @var string
     */
    const _usd = '_usd';
    /**
     * @var string
     */
    const _uyu = '_uyu';
    /**
     * @var string
     */
    const _uzs = '_uzs';
    /**
     * @var string
     */
    const _veb = '_veb';
    /**
     * @var string
     */
    const _vef = '_vef';
    /**
     * @var string
     */
    const _ves = '_ves';
    /**
     * @var string
     */
    const _vnd = '_vnd';
    /**
     * @var string
     */
    const _vuv = '_vuv';
    /**
     * @var string
     */
    const _wst = '_wst';
    /**
     * @var string
     */
    const _wsx = '_wsx';
    /**
     * @var string
     */
    const _xaf = '_xaf';
    /**
     * @var string
     */
    const _xag = '_xag';
    /**
     * @var string
     */
    const _xau = '_xau';
    /**
     * @var string
     */
    const _xcd = '_xcd';
    /**
     * @var string
     */
    const _xdr = '_xdr';
    /**
     * @var string
     */
    const _xof = '_xof';
    /**
     * @var string
     */
    const _xop = '_xop';
    /**
     * @var string
     */
    const _xpd = '_xpd';
    /**
     * @var string
     */
    const _xpf = '_xpf';
    /**
     * @var string
     */
    const _xpt = '_xpt';
    /**
     * @var string
     */
    const _yer = '_yer';
    /**
     * @var string
     */
    const _yum = '_yum';
    /**
     * @var string
     */
    const _zar = '_zar';
    /**
     * @var string
     */
    const _zmk = '_zmk';
    /**
     * @var string
     */
    const _zmw = '_zmw';
    /**
     * @var string
     */
    const _zrn = '_zrn';
    /**
     * @var string
     */
    const _zwd = '_zwd';
    /**
     * @var string
     */
    const _zwl = '_zwl';
}
