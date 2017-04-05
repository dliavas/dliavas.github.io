<<<<<<< HEAD
﻿<?php
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
define('DB_HOST', 'dliavas.github.io');

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
define('AUTH_KEY',         'впишите сюда уникальную фразу');
define('SECURE_AUTH_KEY',  'впишите сюда уникальную фразу');
define('LOGGED_IN_KEY',    'впишите сюда уникальную фразу');
define('NONCE_KEY',        'впишите сюда уникальную фразу');
define('AUTH_SALT',        'впишите сюда уникальную фразу');
define('SECURE_AUTH_SALT', 'впишите сюда уникальную фразу');
define('LOGGED_IN_SALT',   'впишите сюда уникальную фразу');
define('NONCE_SALT',       'впишите сюда уникальную фразу');

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

<p class=MsoNormal>�* �������� ��������� WordPress.</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* ������ ��� �������� wp-config.php ���������� ���� ���� �
��������</p>

<p class=MsoNormal>�* ���������. ������������� ������������ ���-���������,
�����</p>

<p class=MsoNormal>�* ����������� ���� � &quot;wp-config.php&quot; � ���������
�������� �������.</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* ���� ���� �������� ��������� ���������:</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* * ��������� MySQL</p>

<p class=MsoNormal>�* * ��������� �����</p>

<p class=MsoNormal>�* * ������� ������ ���� ������</p>

<p class=MsoNormal>�* * ABSPATH</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* @link https://codex.wordpress.org/Editing_wp-config.php</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* @package WordPress</p>

<p class=MsoNormal>�*/</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>// ** ��������� MySQL: ��� ���������� ����� �������� �
������ �������-���������� ** //</p>

<p class=MsoNormal>/** ��� ���� ������ ��� WordPress */</p>

<p class=MsoNormal>define('DB_NAME', 'test');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** ��� ������������ MySQL */</p>

<p class=MsoNormal>define('DB_USER', 'Pasha');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** ������ � ���� ������ MySQL */</p>

<p class=MsoNormal>define('DB_PASSWORD', 'grasp_92');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** ��� ������� MySQL */</p>

<p class=MsoNormal>define('DB_HOST', 'dliavas.github.io');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** ��������� ���� ������ ��� �������� ������. */</p>

<p class=MsoNormal>define('DB_CHARSET', 'utf8');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** ����� �������������. �� �������, ���� �� �������. */</p>

<p class=MsoNormal>define('DB_COLLATE', '');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**#@+</p>

<p class=MsoNormal>�* ���������� ����� � ���� ��� ��������������.</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* ������� �������� ������ ��������� �� ���������� �����.</p>

<p class=MsoNormal>�* ����� ������������� �� � ������� {@link
https://api.wordpress.org/secret-key/1.1/salt/ ������� ������ �� WordPress.org}</p>

<p class=MsoNormal>�* ����� �������� ��, ����� ������� ������������ �����
cookies �����������������. ������������� ����������� �������������� �����.</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* @since 2.6.0</p>

<p class=MsoNormal>�*/</p>

<p class=MsoNormal>define('AUTH_KEY',�������� '������� ���� ���������� �����');</p>

<p class=MsoNormal>define('SECURE_AUTH_KEY',� '������� ���� ���������� �����');</p>

<p class=MsoNormal>define('LOGGED_IN_KEY',��� '������� ���� ���������� �����');</p>

<p class=MsoNormal>define('NONCE_KEY',������� '������� ���� ���������� �����');</p>

<p class=MsoNormal>define('AUTH_SALT',������� '������� ���� ���������� �����');</p>

<p class=MsoNormal>define('SECURE_AUTH_SALT', '������� ���� ���������� �����');</p>

<p class=MsoNormal>define('LOGGED_IN_SALT',�� '������� ���� ���������� �����');</p>

<p class=MsoNormal>define('NONCE_SALT',������ '������� ���� ���������� �����');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**#@-*/</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**</p>

<p class=MsoNormal>�* ������� ������ � ���� ������ WordPress.</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* ����� ���������� ��������� ������ � ���� ���� ������,
���� ������������</p>

<p class=MsoNormal>�* ������ ��������. ����������, ���������� ������ �����,
����� � ���� �������������.</p>

<p class=MsoNormal>�*/</p>

<p class=MsoNormal>$table_prefix� = 'wp_';</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/**</p>

<p class=MsoNormal>�* ��� �������������: ����� ������� WordPress.</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* �������� ��� �������� �� true, ����� �������� �����������
����������� ��� ����������.</p>

<p class=MsoNormal>�* ������������� �������� � ��� ������������ �������������
������������ WP_DEBUG</p>

<p class=MsoNormal>�* � ���� ������� ���������.</p>

<p class=MsoNormal>�* </p>

<p class=MsoNormal>�* ���������� � ������ ���������� ���������� ����� ����� �
�������.</p>

<p class=MsoNormal>�*</p>

<p class=MsoNormal>�* @link https://codex.wordpress.org/Debugging_in_WordPress</p>

<p class=MsoNormal>�*/</p>

<p class=MsoNormal>define('WP_DEBUG', false);</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/* ��� ��, ������ �� �����������. �������! */</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** ���������� ���� � ���������� WordPress. */</p>

<p class=MsoNormal>if ( !defined('ABSPATH') )</p>

<p class=MsoNormal>��������������� define('ABSPATH', dirname(__FILE__) . '/');</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>/** �������������� ���������� WordPress � ���������� �����.
*/</p>

<p class=MsoNormal>require_once(ABSPATH . 'wp-settings.php');</p>

</div>

</body>

</html>
>>>>>>> origin/master
