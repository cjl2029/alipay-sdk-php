<?php
/**
 * ALIPAY API: alipay.open.public.gis.query request
 *
 * @author auto create
 * @since  1.0, 2017-04-14 15:21:53
 */

namespace Alipay\Request;

class AlipayOpenPublicGisQueryRequest extends AbstractAlipayRequest
{

    /**
     * 获取用户地理位置
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
