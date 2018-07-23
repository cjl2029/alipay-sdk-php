<?php
/**
 * ALIPAY API: alipay.marketing.tool.fengdie.template.query request
 *
 * @author auto create
 * @since  1.0, 2018-07-02 10:31:37
 */

namespace Alipay\Request;

class AlipayMarketingToolFengdieTemplateQueryRequest extends AbstractAlipayRequest
{

    /**
     * 查询当前用户可用的模板列表
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
