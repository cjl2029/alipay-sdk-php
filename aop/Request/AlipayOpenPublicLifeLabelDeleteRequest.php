<?php
/**
 * ALIPAY API: alipay.open.public.life.label.delete request
 *
 * @author auto create
 * @since  1.0, 2018-05-11 19:07:19
 */

namespace Alipay\Request;

class AlipayOpenPublicLifeLabelDeleteRequest extends AbstractAlipayRequest
{

    /**
     * 标签删除接口
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
