<?php

	/**
	 * AVE.cms
	 *
	 * @package AVE.cms
	 * @version 3.x
	 * @filesource
	 * @copyright © 2007-2014 AVE.cms, http://www.ave-cms.ru
	 *
	 * @license GPL v.2
	 */

	@define('APP_NAME', 'AVE.cms');
	@define('APP_VERSION', '3.25');
	@define('APP_INFO', '<a target="_blank" href="https://www.ave-cms.ru/">Ave-Cms.Ru</a> '.'&copy; 2007-' . date('Y'));

	$themes = array();

	foreach (glob(dirname(dirname(__FILE__)) . '/templates/*') AS $filename)
		if (is_dir($filename))
			$themes[] = basename($filename);

	$codemirror = array(
		'default',
		'3024-day',
		'3024-night',
		'abcdef',
		'ambiance',
		'base16-dark',
		'base16-light',
		'bespin',
		'blackboard',
		'cobalt',
		'colorforth',
		'dracula',
		'duotone-dark',
		'duotone-light',
		'eclipse',
		'elegant',
		'erlang-dark',
		'hopscotch',
		'icecoder',
		'isotope',
		'lesser-dark',
		'liquibyte',
		'material',
		'mbo',
		'mdn-like',
		'midnight',
		'monokai',
		'neat',
		'neo',
		'night',
		'panda-syntax',
		'paraiso-dark',
		'paraiso-light',
		'pastel-on-dark',
		'railscasts',
		'rubyblue',
		'seti',
		'solarized',
		'the-matrix',
		'tomorrow-night-bright',
		'tomorrow-night-eighties',
		'ttcn',
		'twilight',
		'vibrant-ink',
		'xq-dark',
		'xq-light',
		'yeti',
		'zenburn'
	);

	/* ======================================================================================================== */

	//-- Использовать IP для автологина на сайте
	$GLOBALS['CMS_CONFIG']['_CONST_AUTH']['USER_IP'] = array(
		'DESCR'			=> 'Следить за IP при автологине на сайте',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Использовать IP для автологина на сайте
	$GLOBALS['CMS_CONFIG']['_CONST_AUTH']['ADMIN_CAPTCHA'] = array(
		'DESCR'			=> 'Использовать CAPTCHA при входе в панель управления',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Использовать ЧПУ Адреса вида index.php будут преобразованы в /home
	$GLOBALS['CMS_CONFIG']['_CONST_URL']['REWRITE_MODE'] = array(
		'DESCR'			=> 'Использовать ЧПУ Адреса вида index.php будут преобразованы в /home',
		'DEFAULT'		=> true,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Cуффикс ЧПУ, к примеру .html
	$GLOBALS['CMS_CONFIG']['_CONST_URL']['URL_SUFF'] = array(
		'DESCR'			=> 'Cуффикс ЧПУ, к примеру .html',
		'DEFAULT'		=> '',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Использовать транслит в ЧПУ адреса вида /страница/ поменяються на /stranica/
	$GLOBALS['CMS_CONFIG']['_CONST_URL']['TRANSLIT_URL'] = array(
		'DESCR'			=> 'Использовать транслит в ЧПУ адреса вида /страница поменяються на /stranica',
		'DEFAULT'		=> true,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	// Тема публичной части
	$GLOBALS['CMS_CONFIG']['_CONST_THEMES']['DEFAULT_THEME_FOLDER'] = array(
		'DESCR'			=> 'Тема публичной части',
		'DEFAULT'		=> $themes[0],
		'TYPE'			=> 'dropdown',
		'VARIANT'		=> $themes
	);

	// Тема панели администратора
	$GLOBALS['CMS_CONFIG']['_CONST_THEMES']['DEFAULT_THEME_FOLDER_COLOR'] = array(
		'DESCR'			=> 'Тема панели администратора',
		'DEFAULT'		=> 'default',
		'TYPE'			=> 'dropdown',
		'VARIANT'		=> array('default')
	);

	// Цветовая схема Codemirror
	$GLOBALS['CMS_CONFIG']['_CONST_THEMES']['CODEMIRROR_THEME'] = array(
		'DESCR'			=> 'Цветовая схема Codemirror',
		'DEFAULT'		=> 'dracula',
		'TYPE'			=> 'dropdown',
		'VARIANT'		=> $codemirror
	);

	//-- Использовать плавающее боковое меню
	$GLOBALS['CMS_CONFIG']['_CONST_THEMES']['ADMIN_MENU'] = array(
		'DESCR'			=> 'Использовать плавающее боковое меню',
		'DEFAULT'		=> true,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Показывать меню в шапке с действиями
	$GLOBALS['CMS_CONFIG']['_CONST_THEMES']['ADMIN_MENU_QUICK_ADD'] = array(
		'DESCR'			=> 'Показывать меню в шапке с действиями',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Использовать всплывающие "Действия" в системе
	$GLOBALS['CMS_CONFIG']['_CONST_THEMES']['ADMIN_EDITMENU'] = array(
		'DESCR'			=> 'Использовать всплывающие "Действия" в системе',
		'DEFAULT'		=> true,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Директория для хранения вложений
	$GLOBALS['CMS_CONFIG']['_CONST_FOLDERS']['ATTACH_DIR'] = array(
		'DESCR'			=> 'Директория для хранения вложений /tmp/XXX',
		'DEFAULT'		=> 'attachments',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Директория для хранения вложений
	$GLOBALS['CMS_CONFIG']['_CONST_FOLDERS']['UPLOAD_DIR'] = array(
		'DESCR'			=> 'Директория для хранения вложений /XXX',
		'DEFAULT'		=> 'uploads',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Директория для хранения миниатюр Галерей /UPLOAD_DIR/XXX
	$GLOBALS['CMS_CONFIG']['_CONST_FOLDERS']['UPLOAD_GALLERY_DIR'] = array(
		'DESCR'			=> 'Директория для хранения миниатюр Галерей /UPLOAD_DIR/XXX',
		'DEFAULT'		=> 'uploads/gallery',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Директория для хранения миниатюр изображений /UPLOAD_DIR/XXX
	$GLOBALS['CMS_CONFIG']['_CONST_THUMBS']['THUMBNAIL_DIR'] = array(
		'DESCR'			=> 'Директория для хранения миниатюр изображений /UPLOAD_DIR/XXX',
		'DEFAULT'		=> 'th',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Разрешенные методы и размеры для миниатюр (через запятую)
	$GLOBALS['CMS_CONFIG']['_CONST_THUMBS']['THUMBNAIL_SIZES'] = array(
		'DESCR'			=> 'Разрешенные методы и размеры для миниатюр (через запятую)',
		'DEFAULT'		=> '',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Генерировать миниатюрам IPTC
	$GLOBALS['CMS_CONFIG']['_CONST_THUMBS']['THUMBNAIL_IPTC'] = array(
		'DESCR'			=> 'Генерировать миниатюрам IPTC',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Директория для хранения оригиналов изображений (watermark)
	$GLOBALS['CMS_CONFIG']['_CONST_WATERMARKS']['WATERMARKS_DIR'] = array(
		'DESCR'			=> 'Директория для хранения оригиналов изображений (watermark) /XXX',
		'DEFAULT'		=> 'source',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Файл watermark
	$GLOBALS['CMS_CONFIG']['_CONST_WATERMARKS']['WATERMARKS_FILE'] = array(
		'DESCR'			=> 'Файл watermark /UPLOAD_DIR/XXX',
		'DEFAULT'		=> 'watermark.png',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Метод хранение сессий
	$GLOBALS['CMS_CONFIG']['_CONST_SESSIONS']['SESSION_SAVE_HANDLER'] = array(
		'DESCR'			=> 'Метод хранение сессий',
		'DEFAULT'		=> 'mysql',
		'TYPE'			=> 'dropdown',
		'VARIANT'		=> array('mysql', 'files', 'memcached')
	);

	//-- Время жизни сессии (60*60*24 - 24 часа)
	$GLOBALS['CMS_CONFIG']['_CONST_SESSIONS']['SESSION_LIFETIME'] = array(
		'DESCR'			=> 'Время жизни сессии (60*60*24 - 24 часа)',
		'DEFAULT'		=> 60*60*24,
		'TYPE'			=> 'integer',
		'VARIANT'		=> ''
	);

	//-- Время жизни cookie для автологина (60*60*24*14 - 2 недели)
	$GLOBALS['CMS_CONFIG']['_CONST_SESSIONS']['COOKIE_LIFETIME'] = array(
		'DESCR'			=> 'Время жизни cookie для автологина (60*60*24*14 - 2 недели)',
		'DEFAULT'		=> 60*60*24*14,
		'TYPE'			=> 'integer',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Режим разработчика (Отключает кеширование SQL запросов в системе)
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['DEV_MODE'] = array(
		'DESCR'			=> 'Режим разработчика (Отключает кеширование SQL запросов в системе)',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Вывод общей статистики
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['PROFILING'] = array(
		'DESCR'			=> 'Вывод общей статистики',
		'DEFAULT'		=> 'off',
		'TYPE'			=> 'dropdown',
		'VARIANT'		=> array('off', 'light', 'full')
	);

	//-- Собирать статистику выполненных запросов
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['SQL_PROFILING'] = array(
		'DESCR'			=> 'Собирать статистику выполненных SQL запросов',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Включить стандартную обработку ошибок PHP
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['PHP_DEBUGGING'] = array(
		'DESCR'			=> 'Включить стандартную обработку ошибок PHP',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Включить обработку ошибок PHP через обработчик cms
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['PHP_DEBUGGING_FILE'] = array(
		'DESCR'			=> 'Включить обработку ошибок PHP через обработчик системы',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Отправка писем с ошибками MySQL
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['SEND_SQL_ERROR'] = array(
		'DESCR'			=> 'Отправка писем с ошибками MySQL',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Принудительно проверять SQL запросы
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['SQL_QUERY_SANITIZE'] = array(
		'DESCR'			=> 'Принудительно проверять SQL запросы',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Пытаться очистить память если выходит за пределы ("-1" выключенно) в Мегабайтах (увеличивается нагрузка на MySQL)
	$GLOBALS['CMS_CONFIG']['_CONST_DEV']['MEMORY_LIMIT_PANIC'] = array(
		'DESCR'			=> 'Пытаться очистить память если выходит за пределы ("-1" выключенно) в Мегабайтах (увеличивается нагрузка на MySQL)',
		'DEFAULT'		=> -1,
		'TYPE'			=> 'dropdown',
		'VARIANT'		=> array('-1','6','12','28','54','100')
	);

	/* ======================================================================================================== */

	//-- Консоль отладки Smarty
	$GLOBALS['CMS_CONFIG']['_CONST_SMARTY']['SMARTY_DEBUGGING'] = array(
		'DESCR'			=> 'Консоль отладки Smarty',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Контролировать изменения tpl файлов После настройки сайта установить - false
	$GLOBALS['CMS_CONFIG']['_CONST_SMARTY']['SMARTY_COMPILE_CHECK'] = array(
		'DESCR'			=> 'Контролировать изменения tpl файлов После настройки сайта установить - false',
		'DEFAULT'		=> true,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Создание папок для кэширования Установите это в false если ваше окружение PHP не разрешает создание директорий от имени Smarty. Поддиректории более эффективны, так что используйте их, если можете.
	$GLOBALS['CMS_CONFIG']['_CONST_SMARTY']['SMARTY_USE_SUB_DIRS'] = array(
		'DESCR'			=> 'Создание папок для кэширования Установите это в false если ваше окружение PHP не разрешает создание директорий от имени Smarty. Поддиректории более эффективны, так что используйте их, если можете.',
		'DEFAULT'		=> true,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Кэширование скомпилированных шаблонов документов
	$GLOBALS['CMS_CONFIG']['_CONST_CACHE']['CACHE_DOC_TPL'] = array(
		'DESCR'			=> 'Кэширование скомпилированных шаблонов документов',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Кэширование информацию о документе и его полях
	$GLOBALS['CMS_CONFIG']['_CONST_CACHE']['CACHE_DOC_FILE'] = array(
		'DESCR'			=> 'Кэширование информацию о документе и его полях',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Кэширование информацию о документе и его полях
	$GLOBALS['CMS_CONFIG']['_CONST_CACHE']['SITEMAP_CACHE_LIFETIME'] = array(
		'DESCR'			=> 'Время жизни кеша для карты сайта',
		'DEFAULT'		=> 0,
		'TYPE'			=> 'integer',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Включить html компрессию
	$GLOBALS['CMS_CONFIG']['_CONST_COMPRESSION']['HTML_COMPRESSION'] = array(
		'DESCR'			=> 'Включить html компрессию',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Включить gzip компрессию
	$GLOBALS['CMS_CONFIG']['_CONST_COMPRESSION']['GZIP_COMPRESSION'] = array(
		'DESCR'			=> 'Включить gzip компрессию',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Отдавать заголовок на кеширование страницы
	$GLOBALS['CMS_CONFIG']['_CONST_COMPRESSION']['OUTPUT_EXPIRE'] = array(
		'DESCR'			=> 'Отдавать заголовок на кеширование страницы',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Время жизни кеширования страницы (60*60 - 1 час)
	$GLOBALS['CMS_CONFIG']['_CONST_COMPRESSION']['OUTPUT_EXPIRE_OFFSET'] = array(
		'DESCR'			=> 'Время жизни кеширования страницы (60*60 - 1 час)',
		'DEFAULT'		=> 0,
		'TYPE'			=> 'integer',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Адрес Memcached сервера
	$GLOBALS['CMS_CONFIG']['_CONST_MEMCACHED']['MEMCACHED_SERVER'] = array(
		'DESCR'			=> 'Адрес Memcached сервера',
		'DEFAULT'		=> '',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Порт Memcached сервера
	$GLOBALS['CMS_CONFIG']['_CONST_MEMCACHED']['MEMCACHED_PORT'] = array(
		'DESCR'			=> 'Порт Memcached сервера',
		'DEFAULT'		=> '',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Окончание в полях запроса
	$GLOBALS['CMS_CONFIG']['_CONST_REQUEST']['REQUEST_ETC'] = array(
		'DESCR'			=> 'Окончание в полях запроса',
		'DEFAULT'		=> '...',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Разбивать слова при выводе полей в запросе
	$GLOBALS['CMS_CONFIG']['_CONST_REQUEST']['REQUEST_BREAK_WORDS'] = array(
		'DESCR'			=> 'Разбивать слова при выводе полей в запросе',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- При - у поля, оставляем теги в результате
	$GLOBALS['CMS_CONFIG']['_CONST_REQUEST']['REQUEST_STRIP_TAGS'] = array(
		'DESCR'			=> 'При - (минус) у поля, оставлять html теги в результате',
		'DEFAULT'		=> '',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Создание резервной копии базы данных со сжатием
	$GLOBALS['CMS_CONFIG']['_CONST_DATABASE']['DB_EXPORT_GZ'] = array(
		'DESCR'			=> 'Создание резервной копии базы данных со сжатием .gz',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Использовать префикс при экспорте бд
	$GLOBALS['CMS_CONFIG']['_CONST_DATABASE']['DB_EXPORT_PREFIX'] = array(
		'DESCR'			=> 'Использовать префикс при экспорте бд',
		'DEFAULT'		=> true,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Шаблон имени файла экспорта бд (%SERVER%,%DATE%,%TIME%)
	$GLOBALS['CMS_CONFIG']['_CONST_DATABASE']['DB_EXPORT_TPL'] = array(
		'DESCR'			=> 'Шаблон имени файла экспорта бд (%SERVER%, %DATE%, %TIME%)',
		'DEFAULT'		=> '%SERVER%_DB_BackUP_%DATE%_%TIME%',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	/* ======================================================================================================== */

	//-- Yandex MAP API KEY
	$GLOBALS['CMS_CONFIG']['_CONST_OTHER']['YANDEX_MAP_API_KEY'] = array(
		'DESCR'			=> 'Yandex MAP API KEY',
		'DEFAULT'		=> '',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Google MAP API KEY
	$GLOBALS['CMS_CONFIG']['_CONST_OTHER']['GOOGLE_MAP_API_KEY'] = array(
		'DESCR'			=> 'Google MAP API KEY',
		'DEFAULT'		=> '',
		'TYPE'			=> 'string',
		'VARIANT'		=> ''
	);

	//-- Показывать кто был онлайн в течении: (Значение по умолчанию 24 часа)
	$GLOBALS['CMS_CONFIG']['_CONST_OTHER']['USERS_TIME_SHOW'] = array(
		'DESCR'			=> 'Показывать кто был онлайн в течении: (Значение по умолчанию 24 часа)',
		'DEFAULT'		=> 60*60*24,
		'TYPE'			=> 'integer',
		'VARIANT'		=> ''
	);

	//-- Использовать проверку в полях на пусто, только исходные данные, исключая шаблон поля
	$GLOBALS['CMS_CONFIG']['_CONST_OTHER']['USE_GET_FIELDS'] = array(
		'DESCR'			=> 'Использовать, проверку в полях на "пусто", только исходные данные, исключая шаблон поля',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	//-- Проверка наличия новых версий
	$GLOBALS['CMS_CONFIG']['_CONST_OTHER']['CHECK_VERSION'] = array(
		'DESCR'			=> 'Проверка наличия новых версий',
		'DEFAULT'		=> false,
		'TYPE'			=> 'bool',
		'VARIANT'		=> ''
	);

	unset ($themes, $codemirror);

	if (file_exists(dirname(dirname(__FILE__)) . '/config/config.inc.php'))
		include_once(dirname(dirname(__FILE__)) . '/config/config.inc.php');

	foreach ($GLOBALS['CMS_CONFIG'] AS $key => $const)
		foreach ($const AS $k => $v)
			if(! defined($k))
				define($k, $v['DEFAULT']);

?>