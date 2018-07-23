<?php
/**
 * ALIPAY API: alipay.marketing.tool.fengdie.space.batchquery request
 *
 * @author auto create
 * @since  1.0, 2018-04-26 10:14:27
 */

namespace Alipay\Request;

class AlipayMarketingToolFengdieSpaceBatchqueryRequest extends AbstractAlipayRequest
{

    /**
     * 查询空间列表
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
