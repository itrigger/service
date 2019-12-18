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
define( 'AUTH_KEY',         'Kla&`Pxz3(7rP4`/fnL9)VE+aB%v6+4H.Fu+9D`JVRU:*}m>BSd h4XW_??SGqEQ' );
define( 'SECURE_AUTH_KEY',  'PUGe.;myw>~9VTxj63i!9P=&hN$b$>:VT..r(Sc`AH8nUU:IUj(Dib1F.]Fm3H9@' );
define( 'LOGGED_IN_KEY',    'kMF|>u<E[$)J{i31;4({y9%?De(5|uc16B0On)yMM)#}^u)/YKEr{]v^mm}].`9;' );
define( 'NONCE_KEY',        'w&(U(VUDwv]W^22KOb$iN1O0c,=V*#gTFE=vSR.q^.Y<i41~8)p=5d&*+ )-r,!Z' );
define( 'AUTH_SALT',        'wYp?wQ}$96e}k^lhxA1pX}}P#RSbp+#P@[ORG1s<d+djI&VLe7=iwIW~#FbOsxue' );
define( 'SECURE_AUTH_SALT', 'G(!;6:fLN:Dx[7+CC%5oS>.[<KNqDn|W:7)3 qesHCJA`9>!f_gDIYjohr`G|-oT' );
define( 'LOGGED_IN_SALT',   'sc6.FE0MrDAM#4:IhMle#nR|[S,5nQ!oQV_Ik(F1[%b!1^N#?<$qEyQ<ZLZLQQh&' );
define( 'NONCE_SALT',       't!O6VH t=_tet+|M+lQ96yqw8tP^<JvU$jw%I>XMx=,I*8Anye*FHJDP`mH.{eCH' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'sv_';

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
