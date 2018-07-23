<?php
/**
 * ALIPAY API: alipay.open.public.message.single.send request
 *
 * @author auto create
 * @since  1.0, 2018-04-19 11:28:05
 */

namespace Alipay\Request;

class AlipayOpenPublicMessageSingleSendRequest extends AbstractAlipayRequest
{

    /**
     * 单发模板消息
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
