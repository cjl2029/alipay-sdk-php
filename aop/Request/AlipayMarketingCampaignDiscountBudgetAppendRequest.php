<?php
/**
 * ALIPAY API: alipay.marketing.campaign.discount.budget.append request
 *
 * @author auto create
 * @since  1.0, 2017-11-17 11:19:00
 */

namespace Alipay\Request;

class AlipayMarketingCampaignDiscountBudgetAppendRequest extends AbstractAlipayRequest
{

    /**
     * 营销立减活动预算追加
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
