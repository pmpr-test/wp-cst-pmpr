<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3e9ed9b6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; class Attribute extends Common { const sekieukoiiqyocew = 'attribute_'; const eaqimouueykcoogy = self::sekieukoiiqyocew . 'icon'; const mmasioeqaakiysog = self::eaqimouueykcoogy . 's'; const myksoyqyimugscyw = self::sekieukoiiqyocew . 'types'; const kwwyokyacswyaoig = 'top'; const eaiyqykmyaigsiik = 'loop'; const kauwiamcaiqkceek = 'cart'; const qcccwewykmsomogy = 'normal'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_render_attributes', [$this, 'mqwsaikucmocaikw']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('woocommerce_local_attribute_custom_fields', [$this, 'aquigkmeoeiggmam'])->aqaqisyssqeomwom('woocommerce_global_attribute_custom_fields', [$this, 'eoyuiaaouykckssu']); } public function mqwsaikucmocaikw($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ['row' => true, 'type' => self::kwwyokyacswyaoig, 'show_on' => [], 'product' => $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(), 'show_key' => true, 'has_card' => true, 'icon_size' => 'sm', 'key_class' => 'font-weight-bold text-muted', 'icon_color' => 'primary', 'each_class' => 'col-12 col-lg-6 py-2', 'value_class' => '', 'container_class' => '', 'text_container_class' => 'font-15 lh-sm my-auto']); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($product = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::oguseymmyyoyaako)) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->gywsmekygqwieocq($product, [Constants::squoamkioomemiyi => $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::squoamkioomemiyi, self::kwwyokyacswyaoig)]); if ($gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'row')) { $ywmkwiwkosakssii['container_class'] .= ' row'; } $ywmkwiwkosakssii['icon_attrs'] = ['class' => "icon-{$ywmkwiwkosakssii['icon_size']} icon-{$ywmkwiwkosakssii['icon_color']} my-auto mr-3"]; echo $this->iuygowkemiiwqmiw('view', $ywmkwiwkosakssii); } } public function aquigkmeoeiggmam($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow[Constants::squoamkioomemiyi] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(self::myksoyqyimugscyw)->gswweykyogmsyawy(__('Attribute Type', PR__CST__PMPR))->acauweqyyugwisqc([self::qcccwewykmsomogy => __('Normal', PR__CST__PMPR), self::eaiyqykmyaigsiik => __('Loop', PR__CST__PMPR), self::kauwiamcaiqkceek => __('Show on Cart', PR__CST__PMPR), self::kwwyokyacswyaoig => __('Top Feature', PR__CST__PMPR)])->oikgogcweiiaocka()->eyygsasuqmommkua(self::qcccwewykmsomogy); return $ikgwqyuyckaewsow; } public function eoyuiaaouykckssu($ikgwqyuyckaewsow) { $ikgwqyuyckaewsow[Constants::qgqyauaqwqmqseim] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(self::eaqimouueykcoogy)->mkmssscwmeekwgqo(); return $ikgwqyuyckaewsow; } }
