<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d000c42857             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Ticket\Model\Ticket; use Pmpr\Module\Ticket\Setting as TicketSetting; use Pmpr\Module\Ticket\Traits\SubmissionTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use SubmissionTrait; public function __construct() { $this->rest_base = "\164\x69\x63\x6b\x65\164"; parent::__construct(); $this->namespace .= "\x2f\x70\x6d\x70\162"; } public function register_routes() { $this->register("\x2f\147\145\164\55\143\157\156\146\151\x67\x73", [Constants::wwgusigoaksqmwsm => [$this, "\164\x6b\x67\x61\x77\171\153\x67\x65\x63\x6d\x73\141\145\x69\163"]]); $this->register("\x2f\141\144\144\x2d\x74\x69\143\153\x65\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6f\157\143\145\163\147\151\x67\x65\161\x71\161\x79\x75\x6f\x67"]]); $this->register("\57\141\144\144\x2d\x72\x65\161\165\145\163\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x63\157\157\151\x6f\x63\153\x69\167\x65\163\171\x77\x71\x65\147"]]); } public function cooiockiwesywqeg(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::qgeesceacsmeqacu); if ($icwicymcioeyeyek) { $mokawwccycoiqeka = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mokawwccycoiqeka) { $kmekouwmygismoku = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\164\x69\x63\x6b\x65\164\x5f\151\144"); if ($kmekouwmygismoku) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku); if ($kqowykcomaagagow) { if ($mokawwccycoiqeka == $mmqcgecamywacuwe->igawqaomowicuayw($kqowykcomaagagow, Constants::weayyoewessosyko)) { $sogksuscggsicmac = $this->nsswikmyaucycmcw($uamcoiueqaamsqma, $icwicymcioeyeyek); if ($sogksuscggsicmac) { $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x52\145\x71\165\x65\163\x74\x20\163\165\142\155\151\164\x74\145\x64\40\163\165\x63\x63\145\x73\163\146\x75\x6c\154\x79\x2e", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc]]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\145\x74\150\x69\156\x67\x20\x77\162\157\x6e\x67\40\160\x6c\x65\141\x73\x65\x20\143\x6f\156\164\x61\143\x74\40\x75\163\x2e", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x72\162\x79\40\x79\157\165\x20\143\x61\156\40\156\x6f\164\x20\163\165\x62\155\151\164\40\x6e\x65\x77\40\x72\x65\161\165\x65\163\164\40\164\157\x20\164\x68\151\x73\x20\164\x69\x63\153\145\164\56", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\x71\165\145\x73\x74\x65\x64\x20\164\x69\143\x6b\x65\x74\40\x6e\x6f\164\x20\x65\170\151\163\164\x2e", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\124\151\x63\x6b\x65\164\40\111\104", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\103\141\x6e\x20\x6e\157\164\x20\144\145\x74\145\143\x74\40\x73\x65\x6e\144\145\162\40\157\x72\x69\147\x69\x6e", PR__CST__PMPR), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function oocesgigeqqqyuog(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::yeaekcacwwyyqigq); if ($icwicymcioeyeyek) { $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($iakkeikwceeomgyq) { $icwicymcioeyeyek[Constants::weayyoewessosyko] = $iakkeikwceeomgyq; if ($sogksuscggsicmac = $this->gkwywsooooucwuiy($uamcoiueqaamsqma, $icwicymcioeyeyek, true)) { $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { $kuguwoaesuqsqysu = $sogksuscggsicmac[Constants::ckcuiukmyisueqeo]; $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x54\151\143\x6b\145\x74\x20\163\165\142\155\151\164\x74\x65\144\x20\163\165\143\143\145\163\163\x66\x75\154\x6c\x79\56", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT] ?? '', Constants::squoamkioomemiyi => $siquossayskcwkea[Constants::squoamkioomemiyi] ?? $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::qkimemawswowsmoa => $siquossayskcwkea[Constants::qkimemawswowsmoa] ?? $icwicymcioeyeyek[Constants::qkimemawswowsmoa], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc] ?? '', Constants::sgsawoooocqwouiy => $kuguwoaesuqsqysu[Constants::sgsawoooocqwouiy] ?? '']); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\155\145\164\150\151\x6e\147\x20\167\x72\x6f\x6e\x67\40\160\x6c\x65\x61\x73\145\x20\x63\157\x6e\x74\141\143\x74\x20\x75\x73\x2e", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\x6e\x20\x6e\157\164\x20\x64\x65\x74\x65\143\164\x20\163\x65\156\x64\145\162\40\157\162\x69\x67\151\156", PR__CST__PMPR), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function tkgawykgecmsaeis(WP_REST_Request $aqmwamyiwgeeymqa) { $ykquycoiqesuckco = TicketSetting::symcgieuakksimmu(); $oksqskmgoqiqciis = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::goqgcigmiawyauai => -1], Constants::eoaiagsgqsmskugs); $igegswkgwguamwaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas(Constants::cmckeoksigiaqykc, [Constants::eymwucuaaiiciymc => -1, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi('', [Constants::mscgqqsgosmsqygq => $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mgmyymogcioqgawq)), Constants::NAME => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mmkswwqeoquyuwok), Constants::cyswwqgckkwiwyww => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::iacggommisowkuic), Constants::okuwysqsegmimaie => $ykquycoiqesuckco->sgyoqqqusyecsuam(), Constants::ygyiacciqgemekwc => $ykquycoiqesuckco->ywmckiemeswqgeig(), Constants::aqikuweekkucgqoy => $this->ocksiywmkyaqseou("\147\x65\x74\x5f\x63\157\x6d\x70\x6f\x6e\x65\156\164\x73\137\142\171\x5f\x68\157\x73\164", [], [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::ykywsqyeckcgqyik => $this->ocksiywmkyaqseou("\x67\x65\x74\137\x63\157\x6d\160\x6f\x6e\145\156\164\163\x5f\x62\x79\137\150\157\163\x74", [], [Constants::squoamkioomemiyi => Constants::ykywsqyeckcgqyik, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::kqeokggqcsesmqco => $this->ocksiywmkyaqseou("\147\x65\164\x5f\143\x6f\155\160\157\156\145\x6e\x74\163\x5f\x62\171\x5f\150\157\x73\x74", [], [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::oguseymmyyoyaako => $oksqskmgoqiqciis, Constants::cmckeoksigiaqykc => $igegswkgwguamwaa])); } }
