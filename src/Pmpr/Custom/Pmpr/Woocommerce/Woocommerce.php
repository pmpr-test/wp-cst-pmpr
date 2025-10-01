<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68dda3c561b9d             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Woocommerce extends Common { public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Product::symcgieuakksimmu(); Attribute::symcgieuakksimmu(); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_is_sold_individually', '__return_true')->cecaguuoecmccuse('woocommerce_checkout_fields', '__return_empty_array')->cecaguuoecmccuse('woocommerce_menu_account_dropdown_links', [$this, 'hamiqoigegygmqwe']); } public function hamiqoigegygmqwe($oammesyieqmwuwyi) : array { $ugugagoguiycqeys = ['components' => [Constants::TEXT => __('My Components', PR__CST__PMPR), Constants::qgqyauaqwqmqseim => IconInterface::csoyqymugwqiggki, Constants::ogigqueukwysusii => $this->caokeucsksukesyo()->giiecckwoyiawoyy()->oiucukewkckkwiqc('/store/purchase', Constants::ismwwqmwgmqqocke), Constants::iuqumwggccmcuyem => 15]]; return array_merge($ugugagoguiycqeys, $oammesyieqmwuwyi); } }
