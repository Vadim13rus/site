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
define( 'DB_NAME', 'Vadim13' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Vadim13' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Vadikyurich13rus' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K]eSjJPQi)t_>LGJ9Z}SmD#t2tECt+|NN-Fw;3!StGsqXS8T0{ENQ$UiFhx0ykB5' );
define( 'SECURE_AUTH_KEY',  'Iy-AHZ!&j~t+  Rmd*E,{yfmYv(%^FMony%!1aR%v,#HoMgZ9}/SD#iC{)$Y,`AP' );
define( 'LOGGED_IN_KEY',    'vsythX0W#3EqkCJjtM;=M*Z**h$Tgha@m9#(M)]bpy!83tNq(F(H82v@Y-;&]*q|' );
define( 'NONCE_KEY',        ';ph]5>p|^n5h$3MuF#>kl{;$Mkt3!,`(._v}#~k%=.yVq<P1T0q/)6?ywlT{L(us' );
define( 'AUTH_SALT',        'Yr4eAuM|YGUDyK$wTu=-1[6a!N(}a:6T6Wv@&Q~`txJs$@e;i_tIo.HE+#3LZ5%d' );
define( 'SECURE_AUTH_SALT', '!Z|[y_Gpf5mP/fe&8?xcu_^9j2FJ_^_#**s^Al,/@a1E<O}`}hZ%lP*Npn>k<&h ' );
define( 'LOGGED_IN_SALT',   'P^j~#=~@N8Nh.8Ag0]-C0qa/_v,S/v+jyV(lx4&?&$&!&-x)!-N_?P~gVa-j%lC<' );
define( 'NONCE_SALT',       '4g7 s7ZJ!%S.xlF.:GI3y>9|EW1[6fKzV!<ulgdPnl}(kVqVsuJ?X@_@Ck4.j U$' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
