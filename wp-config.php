<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '1510-22_10812' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1510-22_10812' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '20b26c191b72b6eb1197' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'er(/Az0jZD* :gzDzPCV,XI(Z1by~1*BhNi_2F@gK1)N0dV2-SlIxB?*m6MKqpy{' );
define( 'SECURE_AUTH_KEY',  '|N]}mt8S=X%U{Tx*;?4Cku5aSk/P!:54;Jl!le&mVshXn$u+?.l)2^3FPzXwnnx?' );
define( 'LOGGED_IN_KEY',    ')]/dHh{&+veTU`_QbTTrdR0h)8m9~0Vg5zELNs17I;!S6; u6Q!o2v~$>hVX|n42' );
define( 'NONCE_KEY',        'u)GOI8KC*+yI~0T)KaQ}@o6,L)lqAE#~hS1sp^I!!^dqBfI,>@^~Zope<q<Ez7&O' );
define( 'AUTH_SALT',        '2_BY>WTUJ4N;4:m_gvq NwEk#ZK#+C 2C<5F^!z[g<eHVQ*ErEkqYR]+2^Et$Y$#' );
define( 'SECURE_AUTH_SALT', 'k,uF5ZnYazm91$,#)[$ BD:Us,BcO3#6YvCJxPv[w#{(16,MR{K#QF$7@&v/#)]o' );
define( 'LOGGED_IN_SALT',   'L=vu@PlXS[aU{AFDL>UW?0O(BA>UZT:v!63d+G119i4D[`kOm%,VWT*hWxG2JRgT' );
define( 'NONCE_SALT',       '70BVuxSr:NA6rYSJh Sw4SoD46Tf4ikbz4dm>51hPM bb.?2*!0AOcA=gQ/*L#t]' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'teG0x_';


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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';