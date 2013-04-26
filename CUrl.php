<?php
/**
 * CUrl.php
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
 * Wrapper class for curl native php functions
 *
 * @category Extensions
 * @package  Application_Extensions_SiteSpider
 * @author   Elder dos Santos <contato@elderdosantos.com>
 * @license  http://www.gnu.org/copyleft/gpl.txt GPL
 * @link     https://github.com/elderdosantos
 */
class CUrl
{
    
    /**
     * URL do be used into this class
     *
     * @var String $url
     */
    private $_url;

    /**
     * curl instance
     *
     * @var curl $curl
     */
    private $_curl;
    
    /**
     * Wrapper for $url
     *
     * @return String
     */
    public function getUrl()
    {
        return $this->_url;
    }
    
    /**
     * Wrapper for $url
     *
     * @param string $url URL string to be inspected
     *
     * @return void
     */
    public function setUrl($url)
    {
        $this->_url = $url;
    }

    /**
     * Initialize class
     *
     * @return void
     */
    public function init()
    {
        if ($this->_url != "") {
            $this->_curl = curl_init($this->_url);
        } else {
            throw new Exception("URL não informada");
        }
    }
    
    /**
     * Wrapper for php function curl_setopt()
     *
     * @param int    $option Option curl
     * @param string $value  Option value
     *
     * @return void
     */
    public function setOption($option,$value)
    {
        curl_setopt($this->_curl, $option, $value);
    }
    
    /**
     * Make the url requisition
     *
     * @return unknown
     */
    public function execute()
    {
        return curl_exec($this->_curl);
    }
    
    /**
     * Returns the requisition status
     *
     * @param string $info Info to be recuperated from status
     *
     * @return int
     */
    public function getInfo($info)
    {
        return $status = curl_getinfo($this->_curl, $info);
    }

    /**
     * Wrapper for $_curl
     *
     * @return curl
     */
    public function get()
    {
        return $this->_curl;
    }
}