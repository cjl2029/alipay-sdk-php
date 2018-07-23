<?php
/**
 * ALIPAY API: alipay.offline.marketing.voucher.create request
 *
 * @author auto create
 * @since  1.0, 2018-01-12 10:55:52
 */

namespace Alipay\Request;

class AlipayOfflineMarketingVoucherCreateRequest extends AbstractAlipayRequest
{

    /**
     * 券模板创建
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
