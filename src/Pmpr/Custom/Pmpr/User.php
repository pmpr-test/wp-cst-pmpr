<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d3e9ed9b6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr; class User extends Container { const eugksqiuqmouqmws = 'skills'; const kscoikwuqiwqoqww = 'caption'; const owgygmaagyewgioi = 'education'; const uykygsyyykscocgs = 'is_manager'; const eaiouuukogwockeq = 'experience_year'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('shortcode_team_user_info', [$this, 'ucuesquyswgyykmc'], 1, 2)->qcsmikeggeemccuu('shortcode_team_user_caption', [$this, 'wauwwioiwmqmsssk'])->qcsmikeggeemccuu('shortcode_team_user_experience', [$this, 'mqyeskkqaessugou'], 1, 2); } public function yeyiguyegmmyusea() { $this->giiwgiqqoicuqcuw(); $this->ogmgcumcoomekiuy(); } public function giiwgiqqoicuqcuw() { $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->secqmksoyausymio('member', __('Member', PR__CST__PMPR), ['read' => true, 'edit_posts' => true, 'delete_posts' => false]); } public function ogmgcumcoomekiuy() { $smgioooysaacyigy = ['contributor' => 'upload_files', 'editor' => ['publish_posts']]; global $wp_roles; foreach ($smgioooysaacyigy as $oeucsuyqysaciasy => $gkswkiicccswksiq) { if ($oeucsuyqysaciasy && is_array($gkswkiicccswksiq)) { foreach ($gkswkiicccswksiq as $igqsaukqcqscimok) { $wp_roles->add_cap($oeucsuyqysaciasy, $igqsaukqcqscimok); } } else { $wp_roles->add_cap($oeucsuyqysaciasy, $gkswkiicccswksiq); } } } public function wauwwioiwmqmsssk($mkucggyaiaukqoce) { $oeceqaaausgeosyu = $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::kscoikwuqiwqoqww, $mkucggyaiaukqoce); echo esc_html($oeceqaaausgeosyu); } public function ucuesquyswgyykmc($mkucggyaiaukqoce, bool $emwagqamysmyeigc = false) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $oeceqaaausgeosyu = $yoiguusocukqeayg->igawqaomowicuayw(self::kscoikwuqiwqoqww, $mkucggyaiaukqoce); $geysycsisgaocukc = $yoiguusocukqeayg->igawqaomowicuayw(self::owgygmaagyewgioi, $mkucggyaiaukqoce); echo $this->iuygowkemiiwqmiw('team_shortcode_info', ['caption' => $oeceqaaausgeosyu, 'education' => $geysycsisgaocukc, 'is_manager' => $emwagqamysmyeigc]); } public function iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee = null) { $qcgkuqesqqymcuui = $ggauoeuaesiymgee; if ($mkucggyaiaukqoce) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ksskkagoieiyuuwe = true; $ggkaciewmeqmgckg = $yoiguusocukqeayg->igawqaomowicuayw(self::eaiouuukogwockeq, $mkucggyaiaukqoce, true); if (!$ggkaciewmeqmgckg) { $ksskkagoieiyuuwe = false; $ggkaciewmeqmgckg = $yoiguusocukqeayg->ygwimyogyaqgumam($mkucggyaiaukqoce, 'user_registered'); } $qcgkuqesqqymcuui = $this->ocksiywmkyaqseou('get_age', $ggkaciewmeqmgckg, $ksskkagoieiyuuwe); } return $qcgkuqesqqymcuui; } public function mqyeskkqaessugou($mkucggyaiaukqoce, bool $emwagqamysmyeigc = false) { if ($mkucggyaiaukqoce) { $cimomgqukyyywkws = $this->iwowkiqkseykocsk($mkucggyaiaukqoce, 1); echo $this->iuygowkemiiwqmiw('team_shortcode_experience', ['experience' => sprintf(__('%s Years', PR__CST__PMPR), $this->sscegwueamckwmcy('who_shortcode_year', $cimomgqukyyywkws)), 'text' => __('Experience', PR__CST__PMPR), 'is_manager' => $emwagqamysmyeigc]); } } }
