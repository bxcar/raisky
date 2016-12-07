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
define('DB_NAME', 'raisky_data_base');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>!J^!>0bo(2ms$@D&S)8BaYOH#01SmZ|Fb&.E>aQ#{lb2.;MUVQ|gb j!Q4A^aT1');
define('SECURE_AUTH_KEY',  'G,m5f<xS+yB:Vi~k%G@T0|+{/]=lmTvxJ]MHVY<BXk/!rTI(BYRVGfH>_g tSx~k');
define('LOGGED_IN_KEY',    't{Da6h)t9Y2]}bumwf!3g.%C3y*Ed+1{?f4N77=arohx53s`^[v18u=t]N4FYd2G');
define('NONCE_KEY',        '!Ulrmv~&B:mohW2j#@/@1Hz(e<|tt#!D4m^)O&pUhy%gL)WF2V,/I_^mCQv#Eb6&');
define('AUTH_SALT',        'N87T1.y4VRpbQhD,DBml{+,k) CfT%i:AQ#X`,tM&X;l#o/L<QtuO1FbGG&7N/)p');
define('SECURE_AUTH_SALT', '&jYdFvr %rJ0q5DvFl5%h/BCi8XDl[e`ySxH9vIAtY6Hjvf6y/3xovRgALFYtF:(');
define('LOGGED_IN_SALT',   'TVb 6D=q{db$w5>O8s|>*ss%@?&W}*_f9B!^1g>{nL4KK:`qh8$AHTC[40apL3>9');
define('NONCE_SALT',       'K*?GDjxoS Z5u!~<3X?R&FD,5-dN?q30(wO|4` 6guc)0G::X< mKL#?-%uVfo`w');

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
