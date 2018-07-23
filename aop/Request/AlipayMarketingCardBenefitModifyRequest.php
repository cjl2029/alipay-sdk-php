<?php
/**
 * ALIPAY API: alipay.marketing.card.benefit.modify request
 *
 * @author auto create
 * @since  1.0, 2018-03-13 20:26:40
 */

namespace Alipay\Request;

class AlipayMarketingCardBenefitModifyRequest extends AbstractAlipayRequest
{

    /**
     * 会员卡模板外部权益修改
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
