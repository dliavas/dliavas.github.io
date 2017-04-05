<<<<<<< HEAD
п»ї<?php
/**
 * РћСЃРЅРѕРІРЅС‹Рµ РїР°СЂР°РјРµС‚СЂС‹ WordPress.
 *
 * РЎРєСЂРёРїС‚ РґР»СЏ СЃРѕР·РґР°РЅРёСЏ wp-config.php РёСЃРїРѕР»СЊР·СѓРµС‚ СЌС‚РѕС‚ С„Р°Р№Р» РІ РїСЂРѕС†РµСЃСЃРµ
 * СѓСЃС‚Р°РЅРѕРІРєРё. РќРµРѕР±СЏР·Р°С‚РµР»СЊРЅРѕ РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ РІРµР±-РёРЅС‚РµСЂС„РµР№СЃ, РјРѕР¶РЅРѕ
 * СЃРєРѕРїРёСЂРѕРІР°С‚СЊ С„Р°Р№Р» РІ "wp-config.php" Рё Р·Р°РїРѕР»РЅРёС‚СЊ Р·РЅР°С‡РµРЅРёСЏ РІСЂСѓС‡РЅСѓСЋ.
 *
 * Р­С‚РѕС‚ С„Р°Р№Р» СЃРѕРґРµСЂР¶РёС‚ СЃР»РµРґСѓСЋС‰РёРµ РїР°СЂР°РјРµС‚СЂС‹:
 *
 * * РќР°СЃС‚СЂРѕР№РєРё MySQL
 * * РЎРµРєСЂРµС‚РЅС‹Рµ РєР»СЋС‡Рё
 * * РџСЂРµС„РёРєСЃ С‚Р°Р±Р»РёС† Р±Р°Р·С‹ РґР°РЅРЅС‹С…
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** РџР°СЂР°РјРµС‚СЂС‹ MySQL: Р­С‚Сѓ РёРЅС„РѕСЂРјР°С†РёСЋ РјРѕР¶РЅРѕ РїРѕР»СѓС‡РёС‚СЊ Сѓ РІР°С€РµРіРѕ С…РѕСЃС‚РёРЅРі-РїСЂРѕРІР°Р№РґРµСЂР° ** //
/** РРјСЏ Р±Р°Р·С‹ РґР°РЅРЅС‹С… РґР»СЏ WordPress */
define('DB_NAME', 'test');

/** РРјСЏ РїРѕР»СЊР·РѕРІР°С‚РµР»СЏ MySQL */
define('DB_USER', 'Pasha');

/** РџР°СЂРѕР»СЊ Рє Р±Р°Р·Рµ РґР°РЅРЅС‹С… MySQL */
define('DB_PASSWORD', 'grasp_92');

/** РРјСЏ СЃРµСЂРІРµСЂР° MySQL */
define('DB_HOST', 'dliavas.github.io');

/** РљРѕРґРёСЂРѕРІРєР° Р±Р°Р·С‹ РґР°РЅРЅС‹С… РґР»СЏ СЃРѕР·РґР°РЅРёСЏ С‚Р°Р±Р»РёС†. */
define('DB_CHARSET', 'utf8');

/** РЎС…РµРјР° СЃРѕРїРѕСЃС‚Р°РІР»РµРЅРёСЏ. РќРµ РјРµРЅСЏР№С‚Рµ, РµСЃР»Рё РЅРµ СѓРІРµСЂРµРЅС‹. */
define('DB_COLLATE', '');

/**#@+
 * РЈРЅРёРєР°Р»СЊРЅС‹Рµ РєР»СЋС‡Рё Рё СЃРѕР»Рё РґР»СЏ Р°СѓС‚РµРЅС‚РёС„РёРєР°С†РёРё.
 *
 * РЎРјРµРЅРёС‚Рµ Р·РЅР°С‡РµРЅРёРµ РєР°Р¶РґРѕР№ РєРѕРЅСЃС‚Р°РЅС‚С‹ РЅР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ.
 * РњРѕР¶РЅРѕ СЃРіРµРЅРµСЂРёСЂРѕРІР°С‚СЊ РёС… СЃ РїРѕРјРѕС‰СЊСЋ {@link https://api.wordpress.org/secret-key/1.1/salt/ СЃРµСЂРІРёСЃР° РєР»СЋС‡РµР№ РЅР° WordPress.org}
 * РњРѕР¶РЅРѕ РёР·РјРµРЅРёС‚СЊ РёС…, С‡С‚РѕР±С‹ СЃРґРµР»Р°С‚СЊ СЃСѓС‰РµСЃС‚РІСѓСЋС‰РёРµ С„Р°Р№Р»С‹ cookies РЅРµРґРµР№СЃС‚РІРёС‚РµР»СЊРЅС‹РјРё. РџРѕР»СЊР·РѕРІР°С‚РµР»СЏРј РїРѕС‚СЂРµР±СѓРµС‚СЃСЏ Р°РІС‚РѕСЂРёР·РѕРІР°С‚СЊСЃСЏ СЃРЅРѕРІР°.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');
define('SECURE_AUTH_KEY',  'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');
define('LOGGED_IN_KEY',    'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');
define('NONCE_KEY',        'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');
define('AUTH_SALT',        'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');
define('SECURE_AUTH_SALT', 'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');
define('LOGGED_IN_SALT',   'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');
define('NONCE_SALT',       'РІРїРёС€РёС‚Рµ СЃСЋРґР° СѓРЅРёРєР°Р»СЊРЅСѓСЋ С„СЂР°Р·Сѓ');

/**#@-*/

/**
 * РџСЂРµС„РёРєСЃ С‚Р°Р±Р»РёС† РІ Р±Р°Р·Рµ РґР°РЅРЅС‹С… WordPress.
 *
 * РњРѕР¶РЅРѕ СѓСЃС‚Р°РЅРѕРІРёС‚СЊ РЅРµСЃРєРѕР»СЊРєРѕ СЃР°Р№С‚РѕРІ РІ РѕРґРЅСѓ Р±Р°Р·Сѓ РґР°РЅРЅС‹С…, РµСЃР»Рё РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ
 * СЂР°Р·РЅС‹Рµ РїСЂРµС„РёРєСЃС‹. РџРѕР¶Р°Р»СѓР№СЃС‚Р°, СѓРєР°Р·С‹РІР°Р№С‚Рµ С‚РѕР»СЊРєРѕ С†РёС„СЂС‹, Р±СѓРєРІС‹ Рё Р·РЅР°Рє РїРѕРґС‡РµСЂРєРёРІР°РЅРёСЏ.
 */
$table_prefix  = 'wp_';

/**
 * Р”Р»СЏ СЂР°Р·СЂР°Р±РѕС‚С‡РёРєРѕРІ: Р РµР¶РёРј РѕС‚Р»Р°РґРєРё WordPress.
 *
 * РР·РјРµРЅРёС‚Рµ СЌС‚Рѕ Р·РЅР°С‡РµРЅРёРµ РЅР° true, С‡С‚РѕР±С‹ РІРєР»СЋС‡РёС‚СЊ РѕС‚РѕР±СЂР°Р¶РµРЅРёРµ СѓРІРµРґРѕРјР»РµРЅРёР№ РїСЂРё СЂР°Р·СЂР°Р±РѕС‚РєРµ.
 * Р Р°Р·СЂР°Р±РѕС‚С‡РёРєР°Рј РїР»Р°РіРёРЅРѕРІ Рё С‚РµРј РЅР°СЃС‚РѕСЏС‚РµР»СЊРЅРѕ СЂРµРєРѕРјРµРЅРґСѓРµС‚СЃСЏ РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ WP_DEBUG
 * РІ СЃРІРѕС‘Рј СЂР°Р±РѕС‡РµРј РѕРєСЂСѓР¶РµРЅРёРё.
 * 
 * РРЅС„РѕСЂРјР°С†РёСЋ Рѕ РґСЂСѓРіРёС… РѕС‚Р»Р°РґРѕС‡РЅС‹С… РєРѕРЅСЃС‚Р°РЅС‚Р°С… РјРѕР¶РЅРѕ РЅР°Р№С‚Рё РІ РљРѕРґРµРєСЃРµ.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Р­С‚Рѕ РІСЃС‘, РґР°Р»СЊС€Рµ РЅРµ СЂРµРґР°РєС‚РёСЂСѓРµРј. РЈСЃРїРµС…РѕРІ! */

/** РђР±СЃРѕР»СЋС‚РЅС‹Р№ РїСѓС‚СЊ Рє РґРёСЂРµРєС‚РѕСЂРёРё WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** РРЅРёС†РёР°Р»РёР·РёСЂСѓРµС‚ РїРµСЂРµРјРµРЅРЅС‹Рµ WordPress Рё РїРѕРґРєР»СЋС‡Р°РµС‚ С„Р°Р№Р»С‹. */
require_once(ABSPATH . 'wp-settings.php');

=======
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:42.5pt 42.5pt 42.5pt 70.85pt;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=UK>

<div class=WordSection1>

<p class=MsoNormal>&lt;?php</p>

<p class=MsoNormal>/**</p>

<p class=MsoNormal> * Основные параметры WordPress.</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * Скрипт для создания wp-config.php использует этот файл в
процессе</p>

<p class=MsoNormal> * установки. Необязательно использовать веб-интерфейс,
можно</p>

<p class=MsoNormal> * скопировать файл в &quot;wp-config.php&quot; и заполнить
значения вручную.</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * Этот файл содержит следующие параметры:</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * * Настройки MySQL</p>

<p class=MsoNormal> * * Секретные ключи</p>

<p class=MsoNormal> * * Префикс таблиц базы данных</p>

<p class=MsoNormal> * * ABSPATH</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * @link https://codex.wordpress.org/Editing_wp-config.php</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * @package WordPress</p>

<p class=MsoNormal> */</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>// ** Параметры MySQL: Эту информацию можно получить у
вашего хостинг-провайдера ** //</p>

<p class=MsoNormal>/** Имя базы данных для WordPress */</p>

<p class=MsoNormal>define('DB_NAME', 'test');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** Имя пользователя MySQL */</p>

<p class=MsoNormal>define('DB_USER', 'Pasha');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** Пароль к базе данных MySQL */</p>

<p class=MsoNormal>define('DB_PASSWORD', 'grasp_92');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** Имя сервера MySQL */</p>

<p class=MsoNormal>define('DB_HOST', 'dliavas.github.io');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** Кодировка базы данных для создания таблиц. */</p>

<p class=MsoNormal>define('DB_CHARSET', 'utf8');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** Схема сопоставления. Не меняйте, если не уверены. */</p>

<p class=MsoNormal>define('DB_COLLATE', '');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**#@+</p>

<p class=MsoNormal> * Уникальные ключи и соли для аутентификации.</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * Смените значение каждой константы на уникальную фразу.</p>

<p class=MsoNormal> * Можно сгенерировать их с помощью {@link
https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}</p>

<p class=MsoNormal> * Можно изменить их, чтобы сделать существующие файлы
cookies недействительными. Пользователям потребуется авторизоваться снова.</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * @since 2.6.0</p>

<p class=MsoNormal> */</p>

<p class=MsoNormal>define('AUTH_KEY',         'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>define('SECURE_AUTH_KEY',  'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>define('LOGGED_IN_KEY',    'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>define('NONCE_KEY',        'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>define('AUTH_SALT',        'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>define('SECURE_AUTH_SALT', 'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>define('LOGGED_IN_SALT',   'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>define('NONCE_SALT',       'впишите сюда уникальную фразу');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**#@-*/</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**</p>

<p class=MsoNormal> * Префикс таблиц в базе данных WordPress.</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * Можно установить несколько сайтов в одну базу данных,
если использовать</p>

<p class=MsoNormal> * разные префиксы. Пожалуйста, указывайте только цифры,
буквы и знак подчеркивания.</p>

<p class=MsoNormal> */</p>

<p class=MsoNormal>$table_prefix  = 'wp_';</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**</p>

<p class=MsoNormal> * Для разработчиков: Режим отладки WordPress.</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * Измените это значение на true, чтобы включить отображение
уведомлений при разработке.</p>

<p class=MsoNormal> * Разработчикам плагинов и тем настоятельно рекомендуется
использовать WP_DEBUG</p>

<p class=MsoNormal> * в своём рабочем окружении.</p>

<p class=MsoNormal> * </p>

<p class=MsoNormal> * Информацию о других отладочных константах можно найти в
Кодексе.</p>

<p class=MsoNormal> *</p>

<p class=MsoNormal> * @link https://codex.wordpress.org/Debugging_in_WordPress</p>

<p class=MsoNormal> */</p>

<p class=MsoNormal>define('WP_DEBUG', false);</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/* Это всё, дальше не редактируем. Успехов! */</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** Абсолютный путь к директории WordPress. */</p>

<p class=MsoNormal>if ( !defined('ABSPATH') )</p>

<p class=MsoNormal>                define('ABSPATH', dirname(__FILE__) . '/');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** Инициализирует переменные WordPress и подключает файлы.
*/</p>

<p class=MsoNormal>require_once(ABSPATH . 'wp-settings.php');</p>

</div>

</body>

</html>
>>>>>>> origin/master
