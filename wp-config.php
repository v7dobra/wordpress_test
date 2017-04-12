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
define('DB_NAME', 'wp2');

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
define('AUTH_KEY',         '<2(6;1^cHTnPhr+/pT/>OL?}!WMq3{v|tqjP!Jsg2`>VoLgHkk.ANJqHNUt[Baos');
define('SECURE_AUTH_KEY',  '2K {(4@-%-g3y?PK%bS)H@bjx~A.-35lv0JBB~~N3|}eTZqv`TRV^h6/$]X2L-(<');
define('LOGGED_IN_KEY',    'R|ONSe5Tw$M44>X~l]*.:98WNmGrTgy)3N!4{^?W#vK/}} :nKSRNO0=<x9C^[Iz');
define('NONCE_KEY',        '!4:bxvKL|0a<%WMKn)oT>?C~ORg{He]q_0dj#:A~XZjI|@4U:>^xD9c5buk9AlFK');
define('AUTH_SALT',        'c{L<:j3(ykFK #{*`/l:vKj3+TX#FaP%zyr>;W4r}>#K7Wddni7$96rv)Gu]Q,;w');
define('SECURE_AUTH_SALT', 'SJuk-4)lXhDX&MbmNpr=KoztD5%q>MJdU.O3?jI812_O::|]c#r100uNRi4$E2 .');
define('LOGGED_IN_SALT',   'H8]ffpiefrx:IGpj:q+C_2i^hQO$Eb7}$44Jwf9$L)cPn4]Ow.?d8oVGd65DT]wt');
define('NONCE_SALT',       'u3?$wm$FR`IXy<`$O<J6on&e1htp/*ZEJD8#eDk0#R_S%l]KGPG=Qs3KY=JEeFb7');

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
