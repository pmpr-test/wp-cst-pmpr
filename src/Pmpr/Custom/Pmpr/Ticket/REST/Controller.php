<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a99acd768e             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Ticket\Model\Ticket; use Pmpr\Module\Ticket\Setting as TicketSetting; use Pmpr\Module\Ticket\Traits\SubmissionTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use SubmissionTrait; public function __construct() { $this->rest_base = "\164\151\143\x6b\145\x74"; parent::__construct(); $this->namespace .= "\57\160\155\160\x72"; } public function register_routes() { $this->register("\x2f\x67\x65\x74\x2d\x63\157\x6e\x66\151\x67\163", [Constants::wwgusigoaksqmwsm => [$this, "\x74\x6b\x67\x61\167\171\x6b\x67\x65\x63\155\163\141\145\x69\163"]]); $this->register("\57\141\x64\144\x2d\x74\x69\143\x6b\x65\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6f\157\143\x65\x73\x67\151\147\145\161\161\161\171\x75\157\x67"]]); $this->register("\57\x61\144\x64\55\x72\145\161\x75\145\163\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\143\157\x6f\x69\x6f\x63\x6b\x69\x77\x65\x73\x79\167\161\x65\x67"]]); } public function cooiockiwesywqeg(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::qgeesceacsmeqacu); if ($icwicymcioeyeyek) { $mokawwccycoiqeka = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mokawwccycoiqeka) { $kmekouwmygismoku = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\x74\151\143\153\x65\x74\137\x69\144"); if ($kmekouwmygismoku) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku); if ($kqowykcomaagagow) { if ($mokawwccycoiqeka == $mmqcgecamywacuwe->igawqaomowicuayw($kqowykcomaagagow, Constants::weayyoewessosyko)) { $sogksuscggsicmac = $this->nsswikmyaucycmcw($uamcoiueqaamsqma, $icwicymcioeyeyek); if ($sogksuscggsicmac) { $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x52\x65\161\x75\145\163\164\x20\x73\x75\x62\x6d\151\x74\164\x65\144\40\x73\165\x63\x63\145\x73\163\146\x75\x6c\x6c\x79\x2e", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc]]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\155\145\x74\x68\151\156\147\40\x77\162\157\156\x67\x20\160\154\x65\141\x73\145\x20\143\157\x6e\x74\x61\x63\x74\40\165\x73\x2e", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x72\162\x79\x20\x79\x6f\165\x20\x63\x61\x6e\40\156\157\x74\40\163\165\142\155\151\x74\40\156\x65\x77\40\162\145\161\x75\145\x73\164\40\164\x6f\40\164\150\x69\x73\40\x74\x69\143\153\x65\164\56", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\x75\145\x73\x74\x65\144\40\164\151\143\x6b\x65\x74\x20\156\157\164\40\x65\x78\x69\163\x74\56", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\124\x69\143\153\145\164\40\x49\x44", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\x61\156\40\x6e\x6f\164\40\144\x65\x74\145\143\x74\x20\x73\145\x6e\x64\x65\162\40\x6f\162\x69\x67\151\x6e", PR__CST__PMPR), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function oocesgigeqqqyuog(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::yeaekcacwwyyqigq); if ($icwicymcioeyeyek) { $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($iakkeikwceeomgyq) { $icwicymcioeyeyek[Constants::weayyoewessosyko] = $iakkeikwceeomgyq; if ($sogksuscggsicmac = $this->gkwywsooooucwuiy($uamcoiueqaamsqma, $icwicymcioeyeyek, true)) { $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { $kuguwoaesuqsqysu = $sogksuscggsicmac[Constants::ckcuiukmyisueqeo]; $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x54\151\143\153\145\x74\x20\163\x75\142\x6d\151\x74\x74\145\144\x20\x73\x75\143\x63\145\x73\x73\146\165\154\x6c\x79\x2e", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT] ?? '', Constants::squoamkioomemiyi => $siquossayskcwkea[Constants::squoamkioomemiyi] ?? $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::qkimemawswowsmoa => $siquossayskcwkea[Constants::qkimemawswowsmoa] ?? $icwicymcioeyeyek[Constants::qkimemawswowsmoa], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc] ?? '', Constants::sgsawoooocqwouiy => $kuguwoaesuqsqysu[Constants::sgsawoooocqwouiy] ?? '']); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\x6f\x6d\x65\x74\x68\x69\156\x67\x20\x77\162\157\156\147\40\160\154\x65\x61\x73\145\x20\143\x6f\x6e\164\x61\x63\x74\40\165\163\56", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\156\40\x6e\x6f\164\40\x64\x65\x74\145\143\x74\40\163\145\x6e\x64\x65\x72\x20\157\x72\x69\x67\x69\x6e", PR__CST__PMPR), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function tkgawykgecmsaeis(WP_REST_Request $aqmwamyiwgeeymqa) { $ykquycoiqesuckco = TicketSetting::symcgieuakksimmu(); $oksqskmgoqiqciis = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::goqgcigmiawyauai => -1], Constants::eoaiagsgqsmskugs); $igegswkgwguamwaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas(Constants::cmckeoksigiaqykc, [Constants::eymwucuaaiiciymc => -1, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi('', [Constants::mscgqqsgosmsqygq => $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mgmyymogcioqgawq)), Constants::NAME => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mmkswwqeoquyuwok), Constants::cyswwqgckkwiwyww => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::iacggommisowkuic), Constants::okuwysqsegmimaie => $ykquycoiqesuckco->sgyoqqqusyecsuam(), Constants::ygyiacciqgemekwc => $ykquycoiqesuckco->ywmckiemeswqgeig(), Constants::aqikuweekkucgqoy => $this->ocksiywmkyaqseou("\147\145\164\137\x63\157\155\160\157\156\x65\x6e\x74\x73\137\x62\171\137\150\157\163\x74", [], [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::ykywsqyeckcgqyik => $this->ocksiywmkyaqseou("\x67\145\164\x5f\x63\157\155\160\157\x6e\145\x6e\x74\163\137\142\x79\137\150\x6f\x73\x74", [], [Constants::squoamkioomemiyi => Constants::ykywsqyeckcgqyik, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::kqeokggqcsesmqco => $this->ocksiywmkyaqseou("\147\145\164\137\143\x6f\x6d\x70\x6f\x6e\145\x6e\x74\x73\137\x62\171\137\150\x6f\163\x74", [], [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::oguseymmyyoyaako => $oksqskmgoqiqciis, Constants::cmckeoksigiaqykc => $igegswkgwguamwaa])); } }
