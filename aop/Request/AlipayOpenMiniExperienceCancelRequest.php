<?php
/**
 * ALIPAY API: alipay.open.mini.experience.cancel request
 *
 * @author auto create
 * @since  1.0, 2018-01-15 14:43:42
 */

namespace Alipay\Request;

class AlipayOpenMiniExperienceCancelRequest extends AbstractAlipayRequest
{

    /**
     * 小程序取消体验版
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
