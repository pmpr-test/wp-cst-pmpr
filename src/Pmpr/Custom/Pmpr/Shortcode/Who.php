<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc068b8365             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Shortcode; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Pmpr\User; use Pmpr\Module\AdvancedCMS\Shortcode\Segment; use WP_Post; class Who extends Segment { public function __construct() { $this->target = self::iswqqwqguucescay; parent::__construct(); } public function gogaagekwoisaqgu() { $this->icon = IconInterface::yucamggiyyuqayso; $this->title = __("\127\x68\157\x20\151\x73", PR__CST__PMPR); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae($this->kwosaecaikgmoeyo()->mkksewyosgeumwsa(self::ckuwucygcwsiawms(Constants::mkousmkiawwousws, __("\x49\155\141\x67\145", PR__CST__PMPR))->eukmukacucooequu(["\150\x61\163\137\x69\x6d\141\x67\x65" => true])->smmismmuuccmscya()->iyouqgqicyqkiswi(6)->oeewiaacscgyamai("\x61\x74\x74\x61\143\150\155\x65\x6e\164"))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(Constants::meksegaoamowuwoq, __("\x55\163\145\x72", PR__CST__PMPR))->soyqkauogoaqekos()->iyouqgqicyqkiswi(6)->ccmwycqioaicegoc(__("\x53\x65\x6c\145\143\164\40\165\163\145\162\40\x66\157\162\40\163\150\157\167\x20\x65\170\160\x65\162\x69\145\156\143\x65\40\144\141\164\x65\40\x69\x6e\40\x73\x68\x6f\162\x74\x63\157\144\x65\56", PR__CST__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(Constants::qwumqqyuasyskkkc, __("\x49\164\145\155\x73", PR__CST__PMPR))->mkksewyosgeumwsa(self::scgissgkcwaumgky(Constants::qgqyauaqwqmqseim))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(__("\x54\x65\x78\x74", PR__CST__PMPR)))->wygoskowywcuyaiq())); } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { $wuweqamcqsykigmg = $this->mmmmkyaeegwmkeqc(["\146\x72\x6f\x6d" => 2005, "\164\x6f" => date("\x59")]); $ggauoeuaesiymgee = 0; if (isset($wuweqamcqsykigmg["\146\x72\157\x6d"], $wuweqamcqsykigmg["\164\x6f"])) { if (isset($wuweqamcqsykigmg["\144\x69\146\x66"])) { $ggauoeuaesiymgee = $wuweqamcqsykigmg["\144\151\x66\x66"]; } else { $ggauoeuaesiymgee = (int) $wuweqamcqsykigmg["\x74\157"] - (int) $wuweqamcqsykigmg["\x66\162\157\x6d"]; } } $wwgucssaecqekuek["\171\x65\x61\162"] = sprintf(__("\x25\x73\x20\131\x65\x61\x72\163", PR__CST__PMPR), self::iwowkiqkseykocsk($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, Constants::meksegaoamowuwoq), $ggauoeuaesiymgee)); $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = sprintf(__("\x57\x68\157\x20\x69\x73\x20\45\x73\77", PR__CST__PMPR), get_bloginfo("\x6e\141\155\145")); $wwgucssaecqekuek["\x79\x65\x61\162\137\164\145\170\164"] = __("\103\157\156\163\165\x6c\164\141\164\151\157\156\x2c\40\123\165\160\145\162\x76\x69\163\151\157\x6e\54\x20\x49\155\160\x6c\145\x6d\x65\x6e\x74\x61\164\x69\157\156", PR__CST__PMPR); return parent::kyaweigsqwomykaa($wwgucssaecqekuek); } public function mmmmkyaeegwmkeqc($wuweqamcqsykigmg, $mcmaiqckgiuqayau = true) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $oeocqmiumeoqicsa = $seumokooiykcomco->ciugwooasaqcywas("\163\145\x72\x76\x69\x63\x65", [Constants::awkcoioakcaougmq => "\101\123\103", Constants::goqgcigmiawyauai => 1]); $mcmcymukmqioukkk = "\62\x30\60\x36\55\x31\55\61\x20\60\x30\72\x30\x30\72\60\60"; $acuayeeoiwokyomo = date("\131\55\x6d\x2d\x64\x20\x48\72\151\72\163"); if ($oeocqmiumeoqicsa && isset($oeocqmiumeoqicsa[0])) { $oyscqkqkwmeakcac = $oeocqmiumeoqicsa[0]; if ($oyscqkqkwmeakcac instanceof WP_Post) { $mcmcymukmqioukkk = $seumokooiykcomco->squyiyimquqicqke(null, $oyscqkqkwmeakcac, false); } } if (!isset($wuweqamcqsykigmg["\x66\x72\157\x6d"], $wuweqamcqsykigmg["\164\x6f"]) || $mcmcymukmqioukkk && $acuayeeoiwokyomo) { $wuweqamcqsykigmg = ["\x74\x6f" => $mcmaiqckgiuqayau ? $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($acuayeeoiwokyomo), "\x59") : $acuayeeoiwokyomo, "\x66\162\x6f\155" => $mcmaiqckgiuqayau ? $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($mcmcymukmqioukkk), "\x59") : $mcmcymukmqioukkk, "\144\151\x66\146" => (int) date("\131", strtotime($acuayeeoiwokyomo)) - (int) date("\x59", strtotime($mcmcymukmqioukkk))]; } return $wuweqamcqsykigmg; } public static function iwowkiqkseykocsk($mkucggyaiaukqoce = null, $ggauoeuaesiymgee = null) { return User::symcgieuakksimmu()->iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee); } }
