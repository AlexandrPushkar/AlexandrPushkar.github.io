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
define('DB_NAME', 'Portfolio');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+2Y8AgPo~/ciZ!g(MA?iPWx#gd6CI6#bgsiec+Dv|]?`f:Tl8l0qbS(04(MSM`M7');
define('SECURE_AUTH_KEY',  ':3R~DsZ08lQF` @N[HWt!;$v<.U]j)BC{4GkEV%%p.&!*^ccM|~~@$QGn^;HN`r]');
define('LOGGED_IN_KEY',    '-dr56sB^IlVxu~^jqP`7]m-~8a GXTYt[,Q(JSp-91Uw1f;U]Es}%D}Pu3@^vHDJ');
define('NONCE_KEY',        'r4- 8n#X#|*sMOn(<|Fj3$OfSEztr)mb-w+d}tR{ME_BCisXa+ftAc~{(q>UW|EA');
define('AUTH_SALT',        '>i |(][[;>r=7B(k82}BuS+[Fl`T!?Dd>@9W?U_VgTZ$ib6YH +X])/KGkr2 ~,/');
define('SECURE_AUTH_SALT', ',tG:O?|uu92O(D;ZMGG3!fg3{qFtFwON+670{^u4ae-P.8qZZ]RG_NFxbExF,P]i');
define('LOGGED_IN_SALT',   'J2Bx^#zVt~^s33`,nb|8D)0M4o)Qe3OY[=@Q-vT[BCQU}sQ]|9~i)Ub+r!6&sj, ');
define('NONCE_SALT',       '#m7-vdhj(1MDj%9|<nJ12L-cyfg 0)Y>!ab#4Nk~-b_-;3RG_@@0czGFycVNLt^t');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'pf_';

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
