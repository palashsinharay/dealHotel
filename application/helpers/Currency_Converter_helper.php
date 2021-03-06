 <?php
/*
AED - United Arab Emirates Dirham (AED)
ANG - Netherlands Antillean Guilder (ANG)
ARS - Argentine Peso (ARS)
AUD - Australian Dollar (A$)
BDT - Bangladeshi Taka (BDT)
BGN - Bulgarian Lev (BGN)
BHD - Bahraini Dinar (BHD)
BND - Brunei Dollar (BND)
BOB - Bolivian Boliviano (BOB)
BRL - Brazilian Real (R$)
BWP - Botswanan Pula (BWP)
CAD - Canadian Dollar (CA$)
CHF - Swiss Franc (CHF)
CLP - Chilean Peso (CLP)
CNY - Chinese Yuan (CN¥)
COP - Colombian Peso (COP)
CRC - Costa Rican Col?n (CRC)
CZK - Czech Republic Koruna (CZK)
DKK - Danish Krone (DKK)
DOP - Dominican Peso (DOP)
DZD - Algerian Dinar (DZD)
EEK - Estonian Kroon (EEK)
EGP - Egyptian Pound (EGP)
EUR - Euro (€)
FJD - Fijian Dollar (FJD)
GBP - British Pound Sterling (£)
HKD - Hong Kong Dollar (HK$)
HNL - Honduran Lempira (HNL)
HRK - Croatian Kuna (HRK)
HUF - Hungarian Forint (HUF)
IDR - Indonesian Rupiah (IDR)
ILS - Israeli New Sheqel (₪)
INR - Indian Rupee (Rs.)
JMD - Jamaican Dollar (JMD)
JOD - Jordanian Dinar (JOD)
JPY - Japanese Yen (¥)
KES - Kenyan Shilling (KES)
KRW - South Korean Won (?)
KWD - Kuwaiti Dinar (KWD)
KYD - Cayman Islands Dollar (KYD)
KZT - Kazakhstani Tenge (KZT)
LBP - Lebanese Pound (LBP)
LKR - Sri Lankan Rupee (LKR)
LTL - Lithuanian Litas (LTL)
LVL - Latvian Lats (LVL)
MAD - Moroccan Dirham (MAD)
MDL - Moldovan Leu (MDL)
MKD - Macedonian Denar (MKD)
MUR - Mauritian Rupee (MUR)
MVR - Maldivian Rufiyaa (MVR)
MXN - Mexican Peso (MX$)
MYR - Malaysian Ringgit (MYR)
NAD - Namibian Dollar (NAD)
NGN - Nigerian Naira (NGN)
NIO - Nicaraguan C?rdoba (NIO)
NOK - Norwegian Krone (NOK)
NPR - Nepalese Rupee (NPR)
NZD - New Zealand Dollar (NZ$)
OMR - Omani Rial (OMR)
PEN - Peruvian Nuevo Sol (PEN)
PGK - Papua New Guinean Kina (PGK)
PHP - Philippine Peso (Php)
PKR - Pakistani Rupee (PKR)
PLN - Polish Zloty (PLN)
PYG - Paraguayan Guarani (PYG)
QAR - Qatari Rial (QAR)
RON - Romanian Leu (RON)
RSD - Serbian Dinar (RSD)
RUB - Russian Ruble (RUB)
SAR - Saudi Riyal (SAR)
SCR - Seychellois Rupee (SCR)
SEK - Swedish Krona (SEK)
SGD - Singapore Dollar (SGD)
SKK - Slovak Koruna (SKK)
SLL - Sierra Leonean Leone (SLL)
SVC - Salvadoran Col?n (SVC)
THB - Thai Baht (?)
TND - Tunisian Dinar (TND)
TRY - Turkish Lira (TRY)
TTD - Trinidad and Tobago Dollar (TTD)
TWD - New Taiwan Dollar (NT$)
TZS - Tanzanian Shilling (TZS)
UAH - Ukrainian Hryvnia (UAH)
UGX - Ugandan Shilling (UGX)
USD - US Dollar ($)
UYU - Uruguayan Peso (UYU)
UZS - Uzbekistan Som (UZS)
VEF - Venezuelan Bol?var (VEF)
VND - Vietnamese Dong (?)
XOF - CFA Franc BCEAO (CFA)
YER - Yemeni Rial (YER)
ZAR - South African Rand (ZAR)
ZMK - Zambian Kwacha (1968-2012) (ZMK)
ZMW - Zambian Kwacha (ZMW)
 */

//function ConvertCurrency($amount, $from, $to){
//   echo "http://www.google.com/ig/calculator?hl=en&q=".$amount.$from."=?".$to ;
//	echo $str = file_get_contents("http://www.google.com/ig/calculator?hl=en&q=".$amount.$from."=?".$to);
//	$arr = json_encode($str,true);
//        echo '<pre>';
//        print_r($arr);
//}

function ConvertCurrency($amount, $from, $to){
	$str = file_get_contents("http://www.google.com/finance/converter?a=$amount&from=$from&to=$to");
	preg_match('/<span class=bld>([0-9.]+) [A-Z]+<\/span>/', $str, $matches);
	return (count($matches)) ? $matches[1] : '';
}

