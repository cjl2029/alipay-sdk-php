<?php
/**
 * ALIPAY API: alipay.marketing.tool.fengdie.template.send request
 *
 * @author auto create
 * @since  1.0, 2018-04-26 10:13:13
 */

namespace Alipay\Request;

class AlipayMarketingToolFengdieTemplateSendRequest extends AbstractAlipayRequest
{

    /**
     * 分配云凤蝶站点模板
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
