<?php
/**
 * currencies.php
 *
 * Maps currencies to countries
 *
 * @copyright Ingenesis Limited, February 2010-2014
 * @license   GNU GPL version 3 (or later) {@see license.txt}
 * @package   Shopp/Locale/Countries
 * @version   @since 1.5
 * @since     1.0
 **/

defined( 'WPINC' ) || header( 'HTTP/1.1 403' ) & exit; // Prevent direct access

return array(
	'CAD' => array('[true,"$",2,".",",",[3]]' => array('CA')),
	'USD' => array('[true,"$",2,".",",",[3]]' => array('US','USAF','USAT','AS','VG','TL','EC','SV','FM','GU','MH','MP','PW','PR','TC','ZW'),
					'[true,"$\u00a0",2,".",",",[3]]' => array('PA')),
	'GBP' => array('[true,"\u00a3",2,".",",",[3]]' => array('GB','IO','GI','GG','IM','JE','GS')),
	'AFN' => array('[true,"\u060b\u00a0",2,".",",",[3]]' => array('AF')),
	'EUR' => array('[true,"\u20ac",2,".",",",[3]]' => array('AX','AT','EE','GR','GP','IE','IT','LU','PT','SK','SI','VA'),'[true,"\u20ac",2,",",".",[3]]' => array('AD','CY','NL'),'[false,"\u00a0\u20ac",2,",",".",[3]]' => array('BE','ES'),'[false,"\u00a0\u20ac",2,",","\u00a0",[3]]' => array('FI','FR','GF','TF','MQ','YT','MC','RE','BL','PM'),'[false,"\u00a0\u20ac",2,".",",",[3]]' => array('DE'),'[true,"\u20ac\u00a0",2,".",",",[3]]' => array('ME','MF','SM')),
	'ALL' => array('[true,"Lek\u00a0",2,".",",",[3]]' => array('AL')),
	'DZD' => array('[false,"\u00a0\u062f.\u062c",2,".",",",[3]]' => array('DZ')),
	'AOA' => array('[false,"\u00a0Kz",2,",","\u00a0",[3]]' => array('AO')),
	'XCD' => array('[true,"EC$",2,".",",",[3]]' => array('AI','AG','DM','GD','MS','KN','LC','VC')),
	'ARS' => array('[true,"$",2,",",".",[3]]' => array('AR')),
	'AMD' => array('[false,"\u00a0\u0534\u0580\u0561\u0574",2,",","",3]' => array('AM')),
	'AWG' => array('[true,"\u0192",2,".",",",[3]]' => array('AW')),
	'AUD' => array('[true,"$",2,".",",",[3]]' => array('AU','CX','CC','HM','KI','NR','NF','TV')),
	'AZN' => array('[true,"man.\u00a0",2,",",".",[3]]' => array('AZ')),
	'BDT' => array('[false,"\u09f3",2,".",",",[3]]' => array('BD')),
	'BBD' => array('[true,"$",2,".",",",[3]]' => array('BB')),
	'BSD' => array('[true,"$",2,".",",",[3]]' => array('BS')),
	'BHD' => array('[true,"\u0628.\u062f\u00a0",2,".",",",[3]]' => array('BH')),
	'BYR' => array('[true,"BYR",2,",","\u00a0",[3]]' => array('BY')),
	'BZD' => array('[true,"$",2,".",",",[3]]' => array('BZ')),
	'XOF' => array('[false,"\u00a0CFA",3,"\u00a0","",3]' => array('BJ','BF','CI','GW','ML','NE','SN'),'[true,"CFA",3,",","",3]' => array('TG')),
	'BMD' => array('[true,"BD$",2,".",",",[3]]' => array('BM')),
	'BTN' => array('[true,"Nu.\u00a0",2,".",",",[3]]' => array('BT')),
	'BOB' => array('[true,"Bs\u00a0",2,",",".",[3]]' => array('BO')),
	'BAM' => array('[true,"KM\u00a0",2,",",".",[3]]' => array('BA')),
	'BWP' => array('[true,"P",2,".",",",[3]]' => array('BW')),
	'BRL' => array('[true,"R$",2,",",".",[3]]' => array('BR')),
	'BND' => array('[true,"$\u00a0",2,",",".",[3]]' => array('BN')),
	'BGN' => array('[false,"\u00a0\u043b\u0432.",2,",","\u00a0",[3]]' => array('BG')),
	'MMK' => array('[true,"K\u00a0",2,".",",",[3]]' => array('MM')),
	'BIF' => array('[false,"\u00a0FBu",2,",","\u00a0",[3]]' => array('BI')),
	'KHR' => array('[false,"\u17db",2,",",".",[3]]' => array('KH')),
	'XAF' => array('[false,"\u00a0FCFA",3,"\u00a0","",3]' => array('CM','CF','TD','CG','GQ','GA')),
	'CVE' => array('[true,"CV$",2,",",".",[3]]' => array('CV')),
	'KYD' => array('[true,"CI$",2,".",",",[3]]' => array('KY')),
	'CLP' => array('[true,"$",2,",",".",[3]]' => array('CL')),
	'CNY' => array('[true,"\u00a5",2,".",",",[3]]' => array('CN')),
	'COP' => array('[true,"$",2,",",".",[3]]' => array('CO')),
	'KMF' => array('[false,"\u00a0FC",3,"\u00a0","",3]' => array('KM')),
	'CDF' => array('[false,"\u00a0FrCD",2,",","\u00a0",[3]]' => array('CD')),
	'NZD' => array('[true,"$",2,".",",",[3]]' => array('CK','NZ','NU','PN','TK')),
	'CRC' => array('[true,"\u20a1",2,",",".",[3]]' => array('CR')),
	'HRK' => array('[false,"\u00a0kn",2,",",".",[3]]' => array('HR')),
	'CUP' => array('[true,"CUP",2,",",".",[3]]' => array('CU')),
	'ANG' => array('[true,"\u0192",2,",",".",[3]]' => array('CW','SX')),
	'CZK' => array('[false,"\u00a0K\u010d",2,",","\u00a0",[3]]' => array('CZ')),
	'DKK' => array('[false,"\u00a0kr",2,",",".",[3]]' => array('DK'),'[true,"kr",2,",",".",[3]]' => array('FO','GL')),
	'DJF' => array('[false,"\u00a0Fdj",3,"\u00a0","",3]' => array('DJ')),
	'DOP' => array('[true,"$",2,".",",",[3]]' => array('DO')),
	'EGP' => array('[true,"\u00a3",2,".",",",[3]]' => array('EG')),
	'ERN' => array('[true,"Nfk,",2,".","",3]' => array('ER')),
	'ETB' => array('[true,"Br",2,".",",",[3]]' => array('ET')),
	'FKP' => array('[true,"FK\u00a3",2,".",",",[3]]' => array('FK')),
	'FJD' => array('[true,"FJ$",2,".",",",[3]]' => array('FJ')),
	'XPF' => array('[false,"F",2,".",",",[3]]' => array('PF','NC','WF')),
	'GMD' => array('[true,"GMD",2,".",",",[3]]' => array('GM')),
	'GEL' => array('[true,"GEL\u00a0",2,",",".",[3]]' => array('GE')),
	'GHS' => array('[true,"\u20b5",2,".",",",[3]]' => array('GH')),
	'GTQ' => array('[true,"Q",2,".",",",[3]]' => array('GT')),
	'GNF' => array('[false,"\u00a0FG",3,"\u00a0","",3]' => array('GN')),
	'GYD' => array('[true,"G$",2,".",",",[3]]' => array('GY')),
	'HTG' => array('[false,"\u00a0HTG",2,",","\u00a0",[3]]' => array('HT')),
	'HNL' => array('[true,"L\u00a0",2,".",",",[3]]' => array('HN')),
	'HKD' => array('[true,"$",2,".",",",[3]]' => array('HK')),
	'HUF' => array('[false,"\u00a0Ft",0,"","\u00a0",[3,3]]' => array('HU')),
	'ISK' => array('[false,"\u00a0kr",0,",",".",[3,3]]' => array('IS')),
	'INR' => array('[true,"\u20a8",2,".",",",[3,2]]' => array('IN')),
	'IDR' => array('[true,"Rp\u00a0",2,",",".",[3]]' => array('ID')),
	'IRR' => array('[false,"\ufdfc",2,",",".",[3]]' => array('IR')),
	'IQD' => array('[false,"\u062f.\u0639",2,",",".",[3]]' => array('IQ')),
	'ILS' => array('[false,"\u00a0\u20aa",2,".",",",[3]]' => array('IL')),
	'JMD' => array('[true,"$",2,".",",",[3]]' => array('JM')),
	'JPY' => array('[true,"\u00a5",0,".",",",[3,3]]' => array('JP')),
	'JOD' => array('[false,"\u00a0JD",2,",",".",[3]]' => array('JO')),
	'KZT' => array('[false,"\u00a0\u3012",2,",","\u00a0",[3]]' => array('KZ')),
	'KES' => array('[true,"Ksh",2,".",",",[3]]' => array('KE')),
	'KWD' => array('[false,"\u00a0\u062f.\u0643",2,",",".",[3]]' => array('KW')),
	'KGS' => array('[false,"\u00a0som",2,",","\u00a0",[3]]' => array('KG')),
	'LAK' => array('[false,"\u00a0\u20ad",2,".",",",[3]]' => array('LA')),
	'LVL' => array('[false,"\u00a0Ls",2,".","\u00a0",[3]]' => array('LV')),
	'LBP' => array('[false,"\u00a0\u0644.\u0644",3,".","",3]' => array('LB')),
	'LSL' => array('[true,"M",2,",","\u00a0",[3]]' => array('LS')),
	'LRD' => array('[true,"LD$",2,".",",",[3]]' => array('LR')),
	'LYD' => array('[false,"\u00a0\u0644.\u062f",2,",",".",[3]]' => array('LY')),
	'CHF' => array('[true,"CHF\u00a0",2,".","\'",[3]]' => array('LI','CH')),
	'LTL' => array('[false,"\u00a0Lt",2,",",".",[3]]' => array('LT')),
	'MOP' => array('[true,"MOP$",2,".",",",[3]]' => array('MO')),
	'MKD' => array('[true,"MKD\u00a0",2,",",".",[3]]' => array('MK')),
	'MGA' => array('[false,"\u00a0MGA",3,"\u00a0","",3]' => array('MG')),
	'MWK' => array('[true,"MK\u00a0",2,".",",",[3]]' => array('MW')),
	'MYR' => array('[true,"RM",2,".",",",[3]]' => array('MY')),
	'MVR' => array('[true,"Rf",2,".",",",[3]]' => array('MV')),
	'MTL' => array('[true,"\u20ac",2,".",",",[3]]' => array('MT')),
	'MRO' => array('[false,"\u00a0UM",2,".",",",[3]]' => array('MR')),
	'MUR' => array('[true,"MU\u20a8",3,",","",3]' => array('MU')),
	'MXN' => array('[true,"$",2,".",",",[3]]' => array('MX')),
	'MDL' => array('[false,"\u00a0MDL",2,",",".",[3]]' => array('MD')),
	'MNT' => array('[false,"\u20ae",2,",","\u00a0",[3]]' => array('MN')),
	'MAD' => array('[false,"\u00a0\u062f.\u0645.",2,",",".",[3]]' => array('MA'),'[false,"\u00a0\u062f\u0631\u0647\u0645",2,",",".",[3]]' => array('EH')),
	'MZN' => array('[true,"MTn",2,",",".",[3]]' => array('MZ')),
	'NAD' => array('[true,"$",2,".",",",[3]]' => array('NA')),
	'NPR' => array('[true,"\u0930\u0942.\u00a0",2,".",",",[3]]' => array('NP')),
	'NIO' => array('[true,"C$\u00a0",2,".",",",[3]]' => array('NI')),
	'NGN' => array('[true,"\u20a6",2,".",",",[3]]' => array('NG')),
	'NOK' => array('[true,"kr\u00a0",2,",","\u00a0",[3]]' => array('NO','SJ')),
	'OMR' => array('[false,"\u00a0\u0631.\u0639",2,",",".",[3]]' => array('OM')),
	'PKR' => array('[true,"\u20a8",2,".",",",[3]]' => array('PK')),
	'PGK' => array('[true,"K",2,".",",",[3]]' => array('PG')),
	'PYG' => array('[true,"\u20b2",3,".","",3]' => array('PY')),
	'PEN' => array('[true,"S\/.\u00a0",2,".",",",[3]]' => array('PE')),
	'PHP' => array('[true,"Php\u00a0",2,".",",",[3]]' => array('PH')),
	'PLN' => array('[false,"\u00a0z\u0142",2,",",".",[3]]' => array('PL')),
	'QAR' => array('[false,"\u00a0\u0631.\u0642",2,",","",3]' => array('QA')),
	'RON' => array('[false,"\u00a0lei",2,",",".",[3]]' => array('RO')),
	'RUB' => array('[false,"\u00a0\u0440\u0443\u0431",2,",","\u00a0",[3]]' => array('RU')),
	'RWF' => array('[true,"RF\u00a0",3,".","",3]' => array('RW')),
	'SHP' => array('[true,"\u00a3",2,".",",",[3]]' => array('SH')),
	'WST' => array('[true,"WS$",2,".",",",[3]]' => array('WS')),
	'STD' => array('[true,"Db\u00a0",2,".",",",[3]]' => array('ST')),
	'SAR' => array('[false,"\u00a0\u0631.\u0633",2,",","",3]' => array('SA')),
	'RSD' => array('[true,"din.\u00a0",3,",","",3]' => array('RS')),
	'SCR' => array('[true,"\u20a8",3,",","",3]' => array('SC')),
	'SLL' => array('[true,"Le\u00a0",2,".",",",[3]]' => array('SL')),
	'SGD' => array('[true,"$",2,".",",",[3]]' => array('SG')),
	'SBD' => array('[true,"SI$",2,".",",",[3]]' => array('SB')),
	'SOS' => array('[true,"Ssh",3,",","",3]' => array('SO')),
	'ZAR' => array('[true,"R",2,",","\u00a0",[3]]' => array('ZA')),
	'KRW' => array('[true,"\u20a9",2,".",",",[3]]' => array('KR')),
	'SSP' => array('[true,"SSP\u00a0",2,".",",",[3]]' => array('SS')),
	'LKR' => array('[true,"SL\u20a8\u00a0",2,".",",",[3]]' => array('LK')),
	'SDG' => array('[true,"SDG\u00a0",2,",",".",[3]]' => array('SD')),
	'SRD' => array('[true,"$",2,".",",",[3]]' => array('SR')),
	'SEK' => array('[false,"\u00a0kr",0,",","\u00a0",[3,3]]' => array('SE')),
	'SZL' => array('[true,"E",2,",","\u00a0",[3]]' => array('SZ')),
	'SYP' => array('[true,"\u00a3S",2,".",",",[3]]' => array('SY')),
	'TWD' => array('[true,"NT$",2,".",",",[3]]' => array('TW')),
	'TJS' => array('[true,"$",2,".",",",[3]]' => array('TJ')),
	'TZS' => array('[false,"\u00a0TSh",2,".",",",[3]]' => array('TZ')),
	'THB' => array('[false,"\u0e3f",2,".",",",[3]]' => array('TH')),
	'TOP' => array('[true,"T$\u00a0",2,".",",",[3]]' => array('TO')),
	'TTD' => array('[true,"TT$",2,".",",",[3]]' => array('TT')),
	'TND' => array('[false,"\u00a0\u062f.\u062a",3,",","",3]' => array('TN')),
	'TRY' => array('[false,"\u00a0TL",2,",",".",[3]]' => array('TR')),
	'TMT' => array('[false,"\u00a0m",2,".",",",[3]]' => array('TM')),
	'UGX' => array('[false,"\u00a0USh",2,".",",",[3]]' => array('UG')),
	'UAH' => array('[false,"\u00a0\u20b4",2,",","\u00a0",[3]]' => array('UA')),
	'AED' => array('[true,"Dhs.\u00a0",2,".",",",[3]]' => array('AE')),
	'UYU' => array('[true,"$",2,".",",",[3]]' => array('UY')),
	'UZS' => array('[true,"$",2,".",",",[3]]' => array('UZ')),
	'VUV' => array('[true,"$",2,".",",",[3]]' => array('VU')),
	'VND' => array('[false,"\u00a0\u20ab",2,",",".",[3]]' => array('VN')),
	'VEF' => array('[true,"Bs.\u00a0",2,".",",",[3]]' => array('VE')),
	'YER' => array('[false,"\u00a0.\u0631.\u064a",2,",",".",[3]]' => array('YE')),
	'ZMK' => array('[false,"\u00a0ZK",2,".",",",[3]]' => array('ZM')),

);