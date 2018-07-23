<?php
/**
 * ALIPAY API: alipay.marketing.tool.fengdie.sites.batchquery request
 *
 * @author auto create
 * @since  1.0, 2018-04-26 10:14:16
 */

namespace Alipay\Request;

class AlipayMarketingToolFengdieSitesBatchqueryRequest extends AbstractAlipayRequest
{

    /**
     * 获取云凤蝶站点列表
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
