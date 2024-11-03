<?php
class erreur {
    protected static $ancien_controleur;
    protected static $errortype = array (
        E_ERROR => "Erreur",
        E_WARNING => "Alerte", 
        E_PARSE => "Erreur d'analyse", 
        E_NOTICE => "Note", 
        E_CORE_ERROR => "Core Error", 
        E_CORE_WARNING => "Core Warning", 
        E_COMPILE_ERROR => "Compile Error",
        E_COMPILE_WARNING => "Compile Warning", 
        E_USER_ERROR => "Erreur spécifique", 
        E_USER_WARNING => "Alerte spécifique", 
        E_USER_NOTICE => "Note spécifique", 
        E_STRICT => "Runtime Notice",
    );
    public static function controleur($errno, $errmsg, $filename, $linenum, $vars) {
        $dt = date("Y-m-d H:i:s (T)");
        $user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE); 
        $err = "<errorentry>\n";
        $err .= "\t<datetime>" . $dt . "</datetime>\n"; 
        $err .= "\t<errornum>" . $errno . "</errornum>\n"; 
        $err .= "\t<errortype>" . self::$errortype[$errno] . "</errortype>\n"; 
        $err .= "\t<errormsg>" . $errmsg . "</errormsg>\n"; 
        $err .= "\t<scriptname>" . $filename . "</scriptname>\n"; 
        $err .= "\t<scriptlinenum>" . $linenum . "</scriptlinenum>\n"; 
        $err .= "</errorentry>\n\n";
    }
    
    public static function start() {
        error_reporting(0);
        self:: $ancien_controleur = set_error_handler("erreur::controleur");
    }
    
    public static function stop() {
        set_error_handler(self::$ancien_controleur);
        error_reporting(E_ALL & E_NOTICE);
    }
}
?>