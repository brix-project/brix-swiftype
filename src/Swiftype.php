<?php

namespace Brix\Swiftype;

use Brix\Swiftype\Type\T_SwiftypeConfig;

class Swiftype extends AbstractBrixCommand
{

    public function __construct() {
        parent::__construct();
        $this->config = $this->brixEnv->brixConfig->get(
            "code_doc",
            T_SwiftypeConfig::class,
            file_get_contents(__DIR__ . "/config_tpl.yml")
        );
    }


}
