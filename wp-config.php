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
define( 'DB_NAME', 'service' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         't;^]cpEaW2PQl!otz<sVK*JJ^mcznr+-UOb$:m;HRt *Lzbn,~{Oh:L~P&b8q:Pu' );
define( 'SECURE_AUTH_KEY',  ',!X# bjP8ILSZj:)v&|Zx7-pl57,9I46-x-Q)lZGPev[JyHAe5)AExnc;I +#}>b' );
define( 'LOGGED_IN_KEY',    '0JY1S9*|Sd(4`*M8uCde(gP^&=~}@64(ZD#a3<pV![Dj{}J2~e6`_Y&#bD2R=fIL' );
define( 'NONCE_KEY',        ';2Qck^bA-[@cPPLK)x`0K#]/yG/|bt}j$iK(L;12f&#@&f)h|8>{23TjD;)~!EN+' );
define( 'AUTH_SALT',        'JvXf2a!F7Ww<m(|NrV=9gY6JP8^H[p[h_~K??u]YVAw6*1Sg4;_S>6l[$]9:@dtl' );
define( 'SECURE_AUTH_SALT', '^mO]a-L]PK!IHzCP&F<p?HUMwKs,@gS?BeCP4n=5g^k6nW~*GS-FZAlQ(Z[Te4oY' );
define( 'LOGGED_IN_SALT',   '~n2cc_:N0:qN:@5M!Mliq2%V*^j]%0`?`>,&>7CnNX~EPyxTw9R+4H!ihId[uZJ#' );
define( 'NONCE_SALT',       'uXtwHB]25 |2^,<7FAxEj4u`)2hzLSg@sT-aTCbp$28q>fHtZ4aYDVA1{Xwj#iJy' );

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
