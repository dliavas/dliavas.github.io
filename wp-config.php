<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'Pasha');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'grasp_92');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$,]ts,|(,9XRG$h-H$y@33&3sI#c_TTCdd2og-nz@NrnF[A@@aqMlLY[~TY=l<[i');
define('SECURE_AUTH_KEY',  '[FP8`6Raoe{Sj0i:9m[p3,R#hMITR,d3QL`wgYS)/pOx*U 1Dx)c(~+:*ua-# [!');
define('LOGGED_IN_KEY',    '8FU_&TGfG[xh-T&M3zc(QEmO5QK{60Rhh.(XhHZ[6KqQu=khl-D:8~!;C:iavdyM');
define('NONCE_KEY',        'El1TtYFi#hX]G3]SshPp}e<V[}&FmccKXC_PT4,l]K$aLw19&Yb}of=t}U Y,Ufm');
define('AUTH_SALT',        'z^3=gijMy(j+j}G}j(zWG5,d`QY-UFCv9!P5dHUp:=v2+m0gIi16,Dc>]6GW5yy7');
define('SECURE_AUTH_SALT', 'LnW#~9>G 2F$IUL#72.*Ylz,$-fb]7qg7o=u1,>sN(d,34KH&OJ/xb6gcaw4Hp1S');
define('LOGGED_IN_SALT',   'hY? ?!9et1@A5w%S/;fVvZ*8]Mxgd$_LFE:q<p S)#cqWe4v2iYBu`M!=l]GD&6e');
define('NONCE_SALT',       'up%4OL> TJh:--scebb`=}5oo{Ix#.E!S[~ai~Ab/G}>>]Vw9,|DnOkSY?Z(/79r');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
