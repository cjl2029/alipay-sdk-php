<?php
/**
 * ALIPAY API: alipay.open.public.group.modify request
 *
 * @author auto create
 * @since  1.0, 2018-05-11 19:06:21
 */

namespace Alipay\Request;

class AlipayOpenPublicGroupModifyRequest extends AbstractAlipayRequest
{

    /**
     * 用户分组修改接口
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
