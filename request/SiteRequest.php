<?php
/**
 * SiteRequest.php
 *
 * PHP Version 5
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider_Request_SiteRequest
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */
/**
 * Manage requisitions to selected website
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider_Request_SiteRequest
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */
class SiteRequest
{
    
    private $_url;
    private $_curl;
    private $_result;
    private $_hasProxy;
    
    /**
     * Class constructor
     *
     * @param string $url URL to be inspected
     *
     * @return void
     */
    public function __construct($url)
    {
        $this->_url = $url;
        $this->_validate();
    }
    
    /**
     * Makes an site validation, checking if this site is accessible
     *
     * @return void
     */
    private function _validate()
    {
        $this->_initCUrl();
    }
    
    
    /**
     * Initialize the class CUrl
     *
     * @return void
     */
    private function _initCUrl()
    {
        $this->_curl = new CUrl();
        $this->_curl->setUrl($this->_url);
        $this->_curl->init();

        $this->_hasProxy = Yii::app()->params['proxy']['enabled'];

        if ($this->_hasProxy) {
            $this->_curl->setOption(
                CURLOPT_PROXYUSERPWD,
                Yii::app()->params['proxy']['usuario'] . ":"
                . Yii::app()->params['proxy']['senha']
            );
            $this->_curl->setOption(
                CURLOPT_PROXY,
                Yii::app()->params['proxy']['ip']
            );
            $this->_curl->setOption(
                CURLOPT_PROXYPORT,
                Yii::app()->params['proxy']['porta']
            );
        }

        $this->_checkSite();
    }
    
    /**
     * Check connectivity on website
     *
     * @return void
     */
    private function _checkSite()
    {
        $this->_curl->setOption(CUrlOptions::$CURLOPT_RETURNTRANSFER, true);
        $this->_curl->setOption(CUrlOptions::$CURLOPT_FOLLOWLOCATION, true);

        $this->_result = $this->_curl->execute();

        $status = ResponseCodes::_toString(
            (int) $this->_curl->getInfo(CUrlOptions::$CURLINFO_HTTP_CODE)
        );
        
        if ($status != "OK") {
            throw new Exception(
                "Falha: "    . $status    . "\n" .
                "Site: "     . $this->_url . "\n" .
                "Mensagem: " . curl_error($this->_curl->get())
            );
        }
    }
    
    /**
     * Returns the result of connection on site
     *
     * @return array
     */
    public function getResult()
    {
        return $this->_result;
    }
}