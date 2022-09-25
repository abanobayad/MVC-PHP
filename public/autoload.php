<?php
/*
    __DIR__;                //Current Path
    dirname(__DIR__);       //Back One Step in the Path 
    dirname(__DIR__,2);     //Back Two Steps in the Path 
 */

define("DS"             , DIRECTORY_SEPARATOR);
define("ROOT_PATH"      , dirname(__DIR__).DS);
define("APP"            , ROOT_PATH.'app'.DS);
define("CORE"           , APP.'Core'.DS);
define("CONFIG"         , APP.'Config'.DS);
define("CONTROLLERS"    , APP.'Controllers'.DS);
define("MODELS"         , APP.'Models'.DS);
define("VIEWS"          , APP.'Views'.DS);
define("LIBS"           , APP.'Libs'.DS);
define("UPLOADS"        , APP.'public'.DS.'uploads'.DS);

require_once(CONFIG."config.php");
require_once(CONFIG."helpers.php");
$modules = [ROOT_PATH ,APP , CORE , CONFIG , CONTROLLERS , MODELS , VIEWS ];
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
// spl_autoload_register('spl_autoload' , false);  // OLD CODE 
spl_autoload_register('spl_autoload'); 

new App();