<?php
/**
 * ALIPAY API: alipay.open.public.account.query request
 *
 * @author auto create
 * @since  1.0, 2016-12-08 11:51:07
 */

namespace Alipay\Request;

class AlipayOpenPublicAccountQueryRequest extends AbstractAlipayRequest
{

    /**
     * 查询绑定商户会员号
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
