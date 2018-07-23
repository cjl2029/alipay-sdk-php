<?php
/**
 * ALIPAY API: alipay.marketing.tool.fengdie.template.batchquery request
 *
 * @author auto create
 * @since  1.0, 2018-04-26 10:14:34
 */

namespace Alipay\Request;

class AlipayMarketingToolFengdieTemplateBatchqueryRequest extends AbstractAlipayRequest
{

    /**
     * 获取云凤蝶空间可用模板列表
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
