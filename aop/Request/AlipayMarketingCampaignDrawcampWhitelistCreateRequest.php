<?php
/**
 * ALIPAY API: alipay.marketing.campaign.drawcamp.whitelist.create request
 *
 * @author auto create
 * @since  1.0, 2017-03-23 14:21:46
 */

namespace Alipay\Request;

class AlipayMarketingCampaignDrawcampWhitelistCreateRequest extends AbstractAlipayRequest
{

    /**
     * 营销抽奖活动白名单创建
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
