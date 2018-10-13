<?php
/**
 *
 * FAQ manager reloaded. An extension for the phpBB Forum Software package.
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
 *
 * @copyright (c) 2018, Ger, https://github.com/gerb
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'FM_ACP_SAVED'                  => 'KKK salvestatud',
    'FM_ANSWER'                     => 'Vastus',
    'FM_CAT_ADD'                    => 'Lisa kategooria',
    'FM_CAT_DELETED'                => 'Category with children deleted',
    'FM_CAT_TITLE'                  => 'Kategooria pealkiri',
    'FM_CHILDREN_WILL_BE_DELETED'	=> 'Kõik selle kategooria kirjed kustutatakse!',
    'FM_DEFAULTS_IMPORT'            => 'Vaikimisi keelefailide lugemine KKK-andmebaasi',
    'FM_DEFAULTS_EXPLAIN'           => 'Kui jätkate, kustutatakse kõik olemasolevad KKK-i sissekanded andmebaasist. Vaikimisi <code>./language/**/help/faq.php</code> faili imporditakse iga lubatud keelde.<br>',
	'FM_FAQ_MANAGER'                => 'KKK haldur',
	'FM_FAQ_DELETED'                => 'KKK sisestus kustutatud',
	'FM_LANG'                       => 'Selle kategooria keel ja selle sissekanded',
	'FM_NO_CATEGORIES'              => 'Ühtegi kategooriat ei leitud',
	'FM_QUESTION'                   => 'Küsimus',
	'FM_QUESTION_ADD'               => 'Lisa uus küsimus selle kategooria alla',
));
