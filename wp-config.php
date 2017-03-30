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
