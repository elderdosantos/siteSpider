<?php
/**
 * SiteSpider.php
 *
 * PHP Version 5
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */

Yii::import("ext.siteSpider.request.SiteRequest");
Yii::import("ext.siteSpider.response.ResponseCodes");

/**
 * Entry class por SiteSpider extension
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */
class SiteSpider extends CComponent
{
        
    /**
     * Instance of class SiteSpider
     *
     * @var SiteSpider
     */
    private static $_instance;
    
    /**
     * SiteRequest's instance
     *
     * @var SiteRequest
     */
    private $_siteRequest;
    
    /**
     * Protection of class constructor (singleton)
     */
    private function __construct()
    {
    }
    
    /**
     * Singleton
     *
     * @return SiteSpider 
     */ 
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new SiteSpider();
        }
        return self::$_instance;
    }
    
    /**
     * Wraper for $siteRequest
     *
     * @param String $url URL to be inspected
     *
     * @return void
     */
    public function setSite($url)
    {
        $this->_siteRequest = new SiteRequest($url);
    }
    
    /**
     * Wraper for $siteRequest
     *
     * @return array
     */
    public function get()
    {
        return $this->_siteRequest->getResult();
    }
    
}