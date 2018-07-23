<?php
/**
 * ALIPAY API: alipay.open.agent.confirm request
 *
 * @author auto create
 * @since  1.0, 2018-06-15 11:24:58
 */

namespace Alipay\Request;

class AlipayOpenAgentConfirmRequest extends AbstractAlipayRequest
{

    /**
     * 提交代商户签约、创建应用事务
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
