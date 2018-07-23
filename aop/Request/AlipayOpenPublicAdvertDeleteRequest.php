<?php
/**
 * ALIPAY API: alipay.open.public.advert.delete request
 *
 * @author auto create
 * @since  1.0, 2017-11-07 10:29:27
 */

namespace Alipay\Request;

class AlipayOpenPublicAdvertDeleteRequest extends AbstractAlipayRequest
{

    /**
     * 生活号广告删除询接口
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
