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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '173455dan' );

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
define( 'AUTH_KEY',         'Kzq$@)yuhwGAo|;Tv 4`hK7lWr=B.,NVSj|umh9Mg5z[CW$td>& ^p&->JpH!<l1' );
define( 'SECURE_AUTH_KEY',  'J_d,kF`H>9niz6Dyw^c&OJ]I@@V<QNvLidOm79z 5ab}w? I+ckiTV2~j3#QjH:O' );
define( 'LOGGED_IN_KEY',    'f+99>y{C@4%4 39(%WHm|g{Bz:$-_YkVcW8N9k2ekp*1%x$LGuJK4F[u!&(<&}UF' );
define( 'NONCE_KEY',        'C[)A5a@+F5|/ =~LRFBT=y/UQF&l[2>$]|HQIh$hT&.m_a~VC7n3y7Ly*0^;XqKK' );
define( 'AUTH_SALT',        '6@NG{> F25-w=xWTSG/0xQs5CsXW8%}eii+MVqM72i4g`XVCCS@|!mfIF3Y8)Q&O' );
define( 'SECURE_AUTH_SALT', '/RR5?<3? tm[qkBIYQ=MqW`!m;YSF=.U<_xVZbYPUZ}i0i~J:5<WlnJE1#:f$|0h' );
define( 'LOGGED_IN_SALT',   'd7vb]c[BgQoDPVRcec9.Z}?Xl,Fr]e.G5_qRWZ5&P1m5ud^5Ng)#3(NrZzZ~FI[r' );
define( 'NONCE_SALT',       'Qh2}VnE#qf8R4EjfT!pB<!x_`P0PRjOV$q6fq t?O|j9i4^RR3k}il%Ihw00{w!y' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
