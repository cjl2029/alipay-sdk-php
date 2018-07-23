<?php
/**
 * ALIPAY API: alipay.marketing.campaign.drawcamp.status.update request
 *
 * @author auto create
 * @since  1.0, 2017-03-23 14:21:52
 */

namespace Alipay\Request;

class AlipayMarketingCampaignDrawcampStatusUpdateRequest extends AbstractAlipayRequest
{

    /**
     * 抽奖活动状态变更
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
