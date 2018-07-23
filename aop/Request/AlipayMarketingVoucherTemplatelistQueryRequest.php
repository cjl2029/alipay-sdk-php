<?php
/**
 * ALIPAY API: alipay.marketing.voucher.templatelist.query request
 *
 * @author auto create
 * @since  1.0, 2018-06-20 18:10:24
 */

namespace Alipay\Request;

class AlipayMarketingVoucherTemplatelistQueryRequest extends AbstractAlipayRequest
{

    /**
     * 查询券模板列表
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
