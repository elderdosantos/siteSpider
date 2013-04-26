<?php
/**
 * ResponseCodes.php
 *
 * PHP Version 5
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider_Response_ResponseCodes
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */
/**
 * curl response codes
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider_Response_ResponseCodes
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */
class ResponseCodes
{
    
    public static $OK                  = 200;
    public static $EMPTY               = 204;
    public static $NOTPERMITED         = 403;
    public static $NOTFOUND            = 404;
    public static $PROXYAUTHENTICATION = 407;
    public static $SERVERERROR         = 503;
    
    /**
     * Return an human string for received error code
     *
     * @param int $errCode Error code
     *
     * @return string
     */
    public static function _toString($errCode)
    {
        switch($errCode){
        case ResponseCodes::$OK:
            return "OK";
            break;
        case ResponseCodes::$EMPTY:
            return "O servidor não retornou dados";
            break;
        case ResponseCodes::$NOTFOUND:
            return "[404] Não encontrado";
            break;
        case ResponseCodes::$NOTPERMITED:
            return "[403] Sem permissão de acesso";
            break;
        case ResponseCodes::$SERVERERROR:
            return "Erro no servidor";
            break;
        case ResponseCodes::$PROXYAUTHENTICATION:
            return "[407] Erro de autenticação no proxy.";
            break;
        default:
            return "Código de erro [" . $errCode . "] não catalogado";
            break;
        }
    }
    
}