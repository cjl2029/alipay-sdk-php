<?php
/**
 * ALIPAY API: alipay.open.public.personalized.extension.set request
 *
 * @author auto create
 * @since  1.0, 2017-04-27 10:50:31
 */

namespace Alipay\Request;

class AlipayOpenPublicPersonalizedExtensionSetRequest extends AbstractAlipayRequest
{

    /**
     * 个性化扩展区上下线接口
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
