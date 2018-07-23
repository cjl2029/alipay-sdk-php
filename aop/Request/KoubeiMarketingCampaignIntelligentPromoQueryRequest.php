<?php
/**
 * ALIPAY API: koubei.marketing.campaign.intelligent.promo.query request
 *
 * @author auto create
 * @since  1.0, 2017-12-20 18:18:43
 */

namespace Alipay\Request;

class KoubeiMarketingCampaignIntelligentPromoQueryRequest extends AbstractAlipayRequest
{

    /**
     * 只能营销方案详情查询
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
