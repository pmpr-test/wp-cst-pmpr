<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b575e4c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Shortcode; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Pmpr\User; use Pmpr\Module\AdvancedCMS\Shortcode\Segment; use WP_Post; class Who extends Segment { public function __construct() { $this->target = self::iswqqwqguucescay; parent::__construct(); } public function gogaagekwoisaqgu() { $this->icon = IconInterface::yucamggiyyuqayso; $this->title = __('Who is', PR__CST__PMPR); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae($this->kwosaecaikgmoeyo()->mkksewyosgeumwsa(self::ckuwucygcwsiawms(Constants::mkousmkiawwousws, __('Image', PR__CST__PMPR))->eukmukacucooequu(['has_image' => true])->smmismmuuccmscya()->iyouqgqicyqkiswi(6)->oeewiaacscgyamai('attachment'))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(Constants::meksegaoamowuwoq, __('User', PR__CST__PMPR))->soyqkauogoaqekos()->iyouqgqicyqkiswi(6)->ccmwycqioaicegoc(__('Select user for show experience date in shortcode.', PR__CST__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(Constants::qwumqqyuasyskkkc, __('Items', PR__CST__PMPR))->mkksewyosgeumwsa(self::scgissgkcwaumgky(Constants::qgqyauaqwqmqseim))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(__('Text', PR__CST__PMPR)))->wygoskowywcuyaiq())); } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { $wuweqamcqsykigmg = $this->mmmmkyaeegwmkeqc(['from' => 2005, 'to' => date('Y')]); $ggauoeuaesiymgee = 0; if (isset($wuweqamcqsykigmg['from'], $wuweqamcqsykigmg['to'])) { if (isset($wuweqamcqsykigmg['diff'])) { $ggauoeuaesiymgee = $wuweqamcqsykigmg['diff']; } else { $ggauoeuaesiymgee = (int) $wuweqamcqsykigmg['to'] - (int) $wuweqamcqsykigmg['from']; } } $wwgucssaecqekuek['year'] = sprintf(__('%s Years', PR__CST__PMPR), self::iwowkiqkseykocsk($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, Constants::meksegaoamowuwoq), $ggauoeuaesiymgee)); $wwgucssaecqekuek[Constants::qescuiwgsyuikume] = sprintf(__('Who is %s?', PR__CST__PMPR), get_bloginfo('name')); $wwgucssaecqekuek['year_text'] = __('Consultation, Supervision, Implementation', PR__CST__PMPR); return parent::kyaweigsqwomykaa($wwgucssaecqekuek); } public function mmmmkyaeegwmkeqc($wuweqamcqsykigmg, $mcmaiqckgiuqayau = true) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $oeocqmiumeoqicsa = $seumokooiykcomco->ciugwooasaqcywas('service', [Constants::awkcoioakcaougmq => 'ASC', Constants::goqgcigmiawyauai => 1]); $mcmcymukmqioukkk = '2006-1-1 00:00:00'; $acuayeeoiwokyomo = date('Y-m-d H:i:s'); if ($oeocqmiumeoqicsa && isset($oeocqmiumeoqicsa[0])) { $oyscqkqkwmeakcac = $oeocqmiumeoqicsa[0]; if ($oyscqkqkwmeakcac instanceof WP_Post) { $mcmcymukmqioukkk = $seumokooiykcomco->squyiyimquqicqke(null, $oyscqkqkwmeakcac, false); } } if (!isset($wuweqamcqsykigmg['from'], $wuweqamcqsykigmg['to']) || $mcmcymukmqioukkk && $acuayeeoiwokyomo) { $wuweqamcqsykigmg = ['to' => $mcmaiqckgiuqayau ? $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($acuayeeoiwokyomo), 'Y') : $acuayeeoiwokyomo, 'from' => $mcmaiqckgiuqayau ? $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($mcmcymukmqioukkk), 'Y') : $mcmcymukmqioukkk, 'diff' => (int) date('Y', strtotime($acuayeeoiwokyomo)) - (int) date('Y', strtotime($mcmcymukmqioukkk))]; } return $wuweqamcqsykigmg; } public static function iwowkiqkseykocsk($mkucggyaiaukqoce = null, $ggauoeuaesiymgee = null) { return User::symcgieuakksimmu()->iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee); } }
