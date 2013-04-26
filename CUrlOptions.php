<?php
/**
 * CUrlOptions.php
 *
 * PHP Version 5
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */
/**
 * Wraper class for curl configuration codes
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt
 * @link     https://github.com/elderdosantos
 */
class CUrlOptions
{
    
    // BOOLEANS
    public static $CURLOPT_AUTOREFERER             = "CURLOPT_AUTOREFERER";
    public static $CURLOPT_BINARYTRANSFER          = "CURLOPT_BINARYTRANSFER";
    public static $CURLOPT_COOKIESESSION           = "CURLOPT_COOKIESESSION";
    public static $CURLOPT_CERTINFO                = "CURLOPT_CERTINFO";
    public static $CURLOPT_CRLF                    = "CURLOPT_CRLF";
    public static $CURLOPT_DNS_USE_GLOBAL_CACHE    = "CURLOPT_DNS_USE_GLOBAL_CACHE";
    public static $CURLOPT_FAILONERROR             = "CURLOPT_FAILONERROR";
    public static $CURLOPT_FILETIME                = "CURLOPT_FILETIME";
    public static $CURLOPT_FOLLOWLOCATION          = 52;
    public static $CURLOPT_FORBID_REUSE            = "CURLOPT_FORBID_REUSE";
    public static $CURLOPT_FRESH_CONNECT           = "CURLOPT_FRESH_CONNECT";
    public static $CURLOPT_FTP_USE_EPRT            = "CURLOPT_FTP_USE_EPRT";
    public static $CURLOPT_FTP_USE_EPSV            = "CURLOPT_FTP_USE_EPSV";
    public static $CURLOPT_FTP_CREATE_MISSING_DIRS = "CURLOPT_FTP_CREATE_MISSING_DIRS";
    public static $CURLOPT_FTPAPPEND               = "CURLOPT_FTPAPPEND";
    public static $CURLOPT_FTPASCII                = "CURLOPT_FTPASCII";
    public static $CURLOPT_FTPLISTONLY             = "CURLOPT_FTPLISTONLY";
    public static $CURLOPT_HEADER                  = "CURLOPT_HEADER";
    public static $CURLINFO_HEADER_OUT             = "CURLINFO_HEADER_OUT";
    public static $CURLOPT_HTTPGET                 = "CURLOPT_HTTPGET";
    public static $CURLOPT_HTTPPROXYTUNNEL         = "CURLOPT_HTTPPROXYTUNNEL";
    public static $CURLOPT_MUTE                    = "CURLOPT_MUTE";
    public static $CURLOPT_NETRC                   = "CURLOPT_NETRC";
    public static $CURLOPT_NOBODY                  = "CURLOPT_NOBODY";
    public static $CURLOPT_NOPROGRESS              = "CURLOPT_NOPROGRESS";
    public static $CURLOPT_NOSIGNAL                = "CURLOPT_NOSIGNAL";
    public static $CURLOPT_POST                    = "CURLOPT_POST";
    public static $CURLOPT_PUT                     = "CURLOPT_PUT";
    public static $CURLOPT_RETURNTRANSFER          = 19913;
    public static $CURLOPT_SSL_VERIFYPEER          = "CURLOPT_SSL_VERIFYPEER";
    public static $CURLOPT_TRANSFERTEXT            = "CURLOPT_TRANSFERTEXT";
    public static $CURLOPT_UNRESTRICTED_AUTH       = "CURLOPT_UNRESTRICTED_AUTH";
    public static $CURLOPT_UPLOAD                  = "CURLOPT_UPLOAD";
    public static $CURLOPT_VERBOSE                 = "CURLOPT_VERBOSE";
    
    //INTEGERS
    public static $CURLOPT_BUFFERSIZE        = "CURLOPT_BUFFERSIZE";
    public static $CURLOPT_CLOSEPOLICY       = "CURLOPT_CLOSEPOLICY";
    public static $CURLOPT_CONNECTTIMEOUT    = "CURLOPT_CONNECTTIMEOUT";
    public static $CURLOPT_DNS_CACHE_TIMEOUT = "CURLOPT_DNS_CACHE_TIMEOUT";
    public static $CURLOPT_FTPSSLAUTH        = "CURLOPT_FTPSSLAUTH";
    public static $CURLOPT_HTTP_VERSION      = "CURLOPT_HTTP_VERSION";
    public static $CURLOPT_HTTPAUTH	         = "CURLOPT_HTTPAUTH";
    public static $CURLOPT_INFILESIZE        = "CURLOPT_INFILESIZE";
    public static $CURLOPT_LOW_SPEED_LIMIT   = "CURLOPT_LOW_SPEED_LIMIT";
    public static $CURLOPT_LOW_SPEED_TIME    = "CURLOPT_LOW_SPEED_TIME";
    public static $CURLOPT_MAXCONNECTS       = "CURLOPT_MAXCONNECTS";
    public static $CURLOPT_MAXREDIRS         = "CURLOPT_MAXREDIRS";
    public static $CURLOPT_PORT              = "CURLOPT_PORT";
    public static $CURLOPT_PROXYAUTH         = "CURLOPT_PROXYAUTH";
    public static $CURLOPT_PROXYPORT         = "CURLOPT_PROXYPORT";
    public static $CURLOPT_PROXYTYPE         = "CURLOPT_PROXYTYPE";
    public static $CURLOPT_RESUME_FROM       = "CURLOPT_RESUME_FROM";
    public static $CURLOPT_SSL_VERIFYHOST    = "CURLOPT_SSL_VERIFYHOST";
    public static $CURLOPT_SSLVERSION        = "CURLOPT_SSLVERSION";
    public static $CURLOPT_TIMECONDITION     = "CURLOPT_TIMECONDITION";
    public static $CURLOPT_TIMEOUT           = "CURLOPT_TIMEOUT";
    public static $CURLOPT_TIMEVALUE         = "CURLOPT_TIMEVALUE";
    
    //STRINGS
    public static $CURLOPT_CAINFO            = "CURLOPT_CAINFO";
    public static $CURLOPT_CAPATH            = "CURLOPT_CAPATH";
    public static $CURLOPT_COOKIE            = "CURLOPT_COOKIE";
    public static $CURLOPT_COOKIEFILE        = "CURLOPT_COOKIEFILE";
    public static $CURLOPT_COOKIEJAR         = "CURLOPT_COOKIEJAR";
    public static $CURLOPT_CUSTOMREQUEST     = "CURLOPT_CUSTOMREQUEST";
    public static $CURLOPT_EGDSOCKET         = "CURLOPT_EGDSOCKET";
    public static $CURLOPT_ENCODING          = "CURLOPT_ENCODING";
    public static $CURLOPT_FTPPORT           = "CURLOPT_FTPPORT";
    public static $CURLOPT_INTERFACE         = "CURLOPT_INTERFACE";
    public static $CURLOPT_KRB4LEVEL         = "CURLOPT_KRB4LEVEL";
    public static $CURLOPT_POSTFIELDS        = "CURLOPT_POSTFIELDS";
    public static $CURLOPT_PROXY             = "CURLOPT_PROXY";
    public static $CURLOPT_PROXYUSERPWD      = "CURLOPT_PROXYUSERPWD";
    public static $CURLOPT_RANDOM_FILE       = "CURLOPT_RANDOM_FILE";
    public static $CURLOPT_RANGE             = "CURLOPT_RANGE";
    public static $CURLOPT_REFERER           = "CURLOPT_REFERER";
    public static $CURLOPT_SSL_CIPHER_LIST   = "CURLOPT_SSL_CIPHER_LIST";
    public static $CURLOPT_SSLCERT           = "CURLOPT_SSLCERT";
    public static $CURLOPT_SSLCERTPASSWD     = "CURLOPT_SSLCERTPASSWD";
    public static $CURLOPT_SSLCERTTYPE       = "CURLOPT_SSLCERTTYPE";
    public static $CURLOPT_SSLENGINE         = "CURLOPT_SSLENGINE";
    public static $CURLOPT_SSLENGINE_DEFAULT = "CURLOPT_SSLENGINE_DEFAULT";
    public static $CURLOPT_SSLKEY            = "CURLOPT_SSLKEY";
    public static $CURLOPT_SSLKEYPASSWD      = "CURLOPT_SSLKEYPASSWD";
    public static $CURLOPT_SSLKEYTYPE        = "CURLOPT_SSLKEYTYPE";
    public static $CURLOPT_URL               = "CURLOPT_URL";
    public static $CURLOPT_USERAGENT         = "CURLOPT_USERAGENT";
    public static $CURLOPT_USERPWD           = "CURLOPT_USERPWD";
    
    // ARRAY
    public static $CURLOPT_HTTP200ALIASES = "CURLOPT_HTTP200ALIASES";
    public static $CURLOPT_HTTPHEADER     = "CURLOPT_HTTPHEADER";
    public static $CURLOPT_POSTQUOTE      = "CURLOPT_POSTQUOTE";
    public static $CURLOPT_QUOTE          = "CURLOPT_QUOTE";
    
    //STREAM
    public static $CURLOPT_FILE        = "CURLOPT_FILE";
    public static $CURLOPT_INFILE      = "CURLOPT_INFILE";
    public static $CURLOPT_STDERR      = 'CURLOPT_STDERR';
    public static $CURLOPT_WRITEHEADER = "CURLOPT_WRITEHEADER";
    
    // STRING NOME DE FUNÇÂO CALLBACK
    public static $CURLOPT_HEADERFUNCTION = "CURLOPT_HEADERFUNCTION";
    public static $CURLOPT_PASSWDFUNCTION = "CURLOPT_PASSWDFUNCTION";
    public static $CURLOPT_READFUNCTION   = "CURLOPT_READFUNCTION";
    public static $CURLOPT_WRITEFUNCTION  = "CURLOPT_WRITEFUNCTION";
    
    public static $CURLINFO_HTTP_CODE = 2097154;

}