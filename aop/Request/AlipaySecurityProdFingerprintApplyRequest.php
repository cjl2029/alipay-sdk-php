<?php
/**
 * ALIPAY API: alipay.security.prod.fingerprint.apply request
 *
 * @author auto create
 * @since  1.0, 2017-08-02 14:25:09
 */

namespace Alipay\Request;

class AlipaySecurityProdFingerprintApplyRequest extends AbstractAlipayRequest
{

    /**
     * 指纹注册
     **/
    private $bizContent;

    private $apiParas = array();
    
    
    
    
    
    
    

    
    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParas["biz_content"] = $bizContent;
    }

    public function getBizContent()
    {
        return $this->bizContent;
    }

    

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }




}
