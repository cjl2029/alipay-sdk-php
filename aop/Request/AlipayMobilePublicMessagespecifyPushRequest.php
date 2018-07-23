<?php
/**
 * ALIPAY API: alipay.mobile.public.messagespecify.push request
 *
 * @author auto create
 * @since  1.0, 2017-04-14 20:30:54
 */

namespace Alipay\Request;

class AlipayMobilePublicMessagespecifyPushRequest extends AbstractAlipayRequest
{

    /**
     * 业务内容JSON
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
