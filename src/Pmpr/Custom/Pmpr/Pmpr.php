<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3e9ed9b6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Pmpr\Attribute\Attribute; use Pmpr\Custom\Pmpr\CPT\CPT; use Pmpr\Custom\Pmpr\CTX\CTX; use Pmpr\Custom\Pmpr\Panel\Panel; use Pmpr\Custom\Pmpr\Qualification\Qualification; use Pmpr\Custom\Pmpr\Shortcode\Shortcode; use Pmpr\Custom\Pmpr\Ticket\Ticket; use Pmpr\Custom\Pmpr\Widget\Widget; use Pmpr\Custom\Pmpr\Woocommerce\Woocommerce; use WPSEO_Frontend; use WP_Admin_Bar; class Pmpr extends ComponentInitiator { const cuoqwcygqikwequw = 'side_logo'; const qqqysowumycocqoq = 'side_badges'; const wioikccqomycogem = 'side_show_stack'; const wesasswqiwmaewqc = self::qqqysowumycocqoq . Constants::icmokuskwoskgace; const ckooiwicugkmumuu = 'stackoverflow_data'; const askwcksaouaciaoa = self::ckooiwicugkmumuu . '_transient2'; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('PMPR Custom', PR__CST__PMPR); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('setup_theme', [$this, 'emiiuemoqmeueqai'])->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye'])->qcsmikeggeemccuu('wp', [$this, 'acggwaiimmsiqoec'], 9999)->qcsmikeggeemccuu('template_redirect', [$this, 'amcckumcimysoaqe'], 9999)->qcsmikeggeemccuu('wp_dashboard_setup', [$this, 'osyoyuiwyoksswaw'], 20)->qcsmikeggeemccuu('wp_before_admin_bar_render', [$this, 'ousqmoiuaaaysayo'])->qcsmikeggeemccuu('wp_user_dashboard_setup', [$this, 'osyoyuiwyoksswaw'], 20)->qcsmikeggeemccuu('wp_network_dashboard_setup', [$this, 'osyoyuiwyoksswaw'], 20); } public function icwcgmcoimqeigye() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); if ($owaoeyikmqaeegma->gaawugksaskamooe()) { Widget::ksyueceqagwomguk(); } CTX::symcgieuakksimmu(); CPT::symcgieuakksimmu(); User::symcgieuakksimmu(); Attribute::symcgieuakksimmu(); Shortcode::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); Qualification::symcgieuakksimmu(); } public function emiiuemoqmeueqai() { $this->kuieicsuscgmwigg('wp_print_styles', 'print_emoji_styles')->kuieicsuscgmwigg('template_redirect', 'redirect_canonical')->kuieicsuscgmwigg('admin_print_styles', 'print_emoji_styles')->kuieicsuscgmwigg('shutdown', 'wp_ob_end_flush_all', 1)->kuieicsuscgmwigg('admin_print_scripts', 'print_emoji_detection_script')->kuieicsuscgmwigg('template_redirect', 'rest_output_link_header', 11); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('emoji_svg_url', '__return_false')->cecaguuoecmccuse('admin_footer_text', '__return_empty_string')->cecaguuoecmccuse('get_the_archive_title', [$this, 'cyumwessyoceqeag'])->cecaguuoecmccuse('paginate_links', [$this, 'usgsqccwweaakyia'], 999)->cecaguuoecmccuse('redirect_canonical', [$this, 'gkqokuwuuckoiksu'], 9999); $this->aqaqisyssqeomwom('change_upload_dir', '__return_true')->aqaqisyssqeomwom('get_badges', [$this, 'iiacsiaagsusawuw'], 999, 2)->aqaqisyssqeomwom('plugin_remote_tab_response', [$this, 'maigyksysoasaseq'], 10, 2); } public function iiacsiaagsusawuw($memkywmosqicmcqs, array $ywmkwiwkosakssii = []) : array { return $this->kmuweyayaqoeqiyw()->iiacsiaagsusawuw($ywmkwiwkosakssii); } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk('panel')) { Panel::symcgieuakksimmu(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk('ticket')) { Ticket::symcgieuakksimmu(); } } public function init() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $this->sciqwmmqqqwsssuu(); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $uusmaiomayssaecw = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->siomckkwaasawmiq('component-manager') . '_settings'; $this->cecaguuoecmccuse($this->caokeucsksukesyo()->mmsykuomogaqoaye()->wysmcwgiaskkoeam($uusmaiomayssaecw, 'pmpr_plugin'), [$this, 'sqemkimmikaqwayo']); } } public function sciqwmmqqqwsssuu() { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if (!$qkqgcaykemoiecma->igqksmmwesguiaae(self::askwcksaouaciaoa) && ($ycoeoaakqyskgykq = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::saceemkgqwqiceuk))) { $keccaugmemegoimu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey("https://api.stackexchange.com/2.3/users/{$ycoeoaakqyskgykq}/?site=stackoverflow.com"); if ($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $kuukgsmqkagwaciu = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($gkyciwoiiisgywcs->get($keccaugmemegoimu, 'body')); $icwicymcioeyeyek = ['link' => $gkyciwoiiisgywcs->qamwegcyimgcqksw($kuukgsmqkagwaciu, 'items.0.link'), 'badges' => $gkyciwoiiisgywcs->qamwegcyimgcqksw($kuukgsmqkagwaciu, 'items.0.badge_counts'), 'reputation' => $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->readable($gkyciwoiiisgywcs->qamwegcyimgcqksw($kuukgsmqkagwaciu, 'items.0.reputation'))]; $qkqgcaykemoiecma->update(self::ckooiwicugkmumuu, $icwicymcioeyeyek); $qkqgcaykemoiecma->gawcqwcqgwgucgya(self::askwcksaouaciaoa, 1, DAY_IN_SECONDS); } } } public function sqemkimmikaqwayo($mgiqqesweuqmsymo) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $mgiqqesweuqmsymo[] = $uuyucgkyusckoaeq->ycgeeoiieoiakgam('plugin_tab_sidebar')->gswweykyogmsyawy(__('Tab\'s Sidebar', PR__CST__PMPR))->saemoowcasogykak(IconInterface::mygkoouoqgausmcm)->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::cuoqwcygqikwequw)->ycueqsmmommygueu()->gswweykyogmsyawy(__('Logo', PR__CST__PMPR)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::wesasswqiwmaewqc)->gswweykyogmsyawy(__('Badges Title', PR__CST__PMPR)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qqqysowumycocqoq)->gswweykyogmsyawy(__('Badges', PR__CST__PMPR))->acauweqyyugwisqc(Setting::symcgieuakksimmu()->iiacsiaagsusawuw())->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::wioikccqomycogem)->gswweykyogmsyawy(__('Show Stackoverflow', PR__CST__PMPR))); return $mgiqqesweuqmsymo; } public function maigyksysoasaseq($keccaugmemegoimu, $amakmumgguksgmum) : array { if ($amakmumgguksgmum) { $uusmaiomayssaecw = 'side'; if ($weowoqykiyuqcwam = $amakmumgguksgmum->giiuwsmyumqwwiyq(self::cuoqwcygqikwequw, 0)) { $keccaugmemegoimu[$uusmaiomayssaecw][Constants::mscgqqsgosmsqygq] = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($weowoqykiyuqcwam, 'full'); } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($oammesyieqmwuwyi = $amakmumgguksgmum->giiuwsmyumqwwiyq(self::qqqysowumycocqoq, [])) { if ($meqocwsecsywiiqs = $amakmumgguksgmum->giiuwsmyumqwwiyq(self::wesasswqiwmaewqc, '')) { $keccaugmemegoimu[$uusmaiomayssaecw][Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; } $memkywmosqicmcqs = $this->iiacsiaagsusawuw([], [Constants::ackcaikowcokggsc => $oammesyieqmwuwyi, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); if ($memkywmosqicmcqs) { foreach ($memkywmosqicmcqs as $ueecaoicgsgwsgys) { $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ueecaoicgsgwsgys, Constants::qgqyauaqwqmqseim); if (is_numeric($wkaqekwwgqsqwcoi)) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($wkaqekwwgqsqwcoi); } else { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi); } $keccaugmemegoimu[$uusmaiomayssaecw]['badges'][] = [Constants::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($ueecaoicgsgwsgys, Constants::qescuiwgsyuikume), Constants::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi, Constants::auqoykcmsiauccao => $gkyciwoiiisgywcs->get($ueecaoicgsgwsgys, Constants::auqoykcmsiauccao)]; } } } if ($qeugiosaymywmysa = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ckooiwicugkmumuu, [])) { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if ($mcqieaigyeeyaksm = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::scsumwgmksaysmsg)) { $mcqieaigyeeyaksm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($mcqieaigyeeyaksm); } $keccaugmemegoimu[$uusmaiomayssaecw]['stackoverflow'] = [Constants::auqoykcmsiauccao => $gkyciwoiiisgywcs->get($qeugiosaymywmysa, Constants::ogigqueukwysusii), Constants::uiwqcumqkgikqyue => $qeugiosaymywmysa, Constants::qescuiwgsyuikume => $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::guuqkysgkgomccyi, 'Stackoverflow'), Constants::mkousmkiawwousws => $mcqieaigyeeyaksm]; } } return $keccaugmemegoimu; } public function cyumwessyoceqeag($meqocwsecsywiiqs) : string { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($meqocwsecsywiiqs && !$mumyimcwkaemyyue->cukiusasccucgwqc() && !$mumyimcwkaemyyue->oowkceqysamwygwu()) { $qkuacemqmswykkie = explode(':', $meqocwsecsywiiqs, 2); if (is_array($qkuacemqmswykkie) && isset($qkuacemqmswykkie[1]) && is_string($qkuacemqmswykkie[1])) { $meqocwsecsywiiqs = rtrim($qkuacemqmswykkie[1]); } } return $meqocwsecsywiiqs; } public function usgsqccwweaakyia($iwywmkygwewiamwm) { $yuyowiyumyysomoy = strpos($iwywmkygwewiamwm, 'page/1/'); if ($yuyowiyumyysomoy !== false) { $iwywmkygwewiamwm = substr($iwywmkygwewiamwm, 0, $yuyowiyumyysomoy); } return $iwywmkygwewiamwm; } public function gkqokuwuuckoiksu($eeamcawaiqocomwy) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kmmyuiwaogukwqqi()) { $eeamcawaiqocomwy = false; } return $eeamcawaiqocomwy; } public function osyoyuiwyoksswaw() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $ewsqcacamuomwagw->iaekyqikwgmkcsok('dashboard_primary', $ewsqcacamuomwagw->oequuauskyumwyau(), Constants::qayiiikwusguoask); } public static function ousqmoiuaaaysayo() { global $wp_admin_bar; if ($wp_admin_bar instanceof WP_Admin_Bar) { $wp_admin_bar->remove_menu('wp-logo'); } } public function amcckumcimysoaqe() { if (class_exists('WPSEO_Frontend')) { $owgumcsyqsamiemg = WPSEO_Frontend::get_instance(); if (method_exists($owgumcsyqsamiemg, 'debug_mark')) { $this->kuieicsuscgmwigg('wpseo_head', [$owgumcsyqsamiemg, 'debug_mark'], 2); } } } public function acggwaiimmsiqoec() { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if (!$mumyimcwkaemyyue->goecwaaykqoaaagg()) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($yeacayasgueouoqc); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::okmiyqowuqogaiiy, '/'); if (trailingslashit($mkomwsiykqigmqca) !== $mkomwsiykqigmqca) { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); $gwgucoaaqcwwciqq = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::ckiaowgkqoewoseo, $gqusacuooiagkuom->gmigwwwmwemyaayy()); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::meieskyuuegwwcsy); $aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::maiomwmauyekiseg, $gqusacuooiagkuom->wymyeyweagqomiim() ? 'https' : 'http'); $igscmsiuisqaqwkk = "{$aaqqkgyougeiueyq}://{$gwgucoaaqcwwciqq}{$mkomwsiykqigmqca}"; if ($gqgemcmoicmgaqie) { parse_str($gqgemcmoicmgaqie, $gqgemcmoicmgaqie); if ($gqgemcmoicmgaqie) { $igscmsiuisqaqwkk = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $igscmsiuisqaqwkk); } } $gqusacuooiagkuom->gwqgmkqcgwwmweom($igscmsiuisqaqwkk); exit; } } } }
