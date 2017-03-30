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
