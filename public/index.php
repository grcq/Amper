<?php

use App\Kernel;

define("PATH", __DIR__);
define("ROOT_PATH", str_replace("/public", "", __DIR__));
define("WEBSITE_NAME", "Amper");

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
