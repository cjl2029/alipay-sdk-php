<?php
/**
 * ALIPAY API: alipay.marketing.campaign.discount.query request
 *
 * @author auto create
 * @since  1.0, 2017-03-03 16:47:49
 */

namespace Alipay\Request;

class AlipayMarketingCampaignDiscountQueryRequest extends AbstractAlipayRequest
{

    /**
     * 优惠活动查看
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
