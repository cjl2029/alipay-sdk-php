<?php
/**
 * ALIPAY API: alipay.offline.market.shop.applyorder.cancel request
 *
 * @author auto create
 * @since  1.0, 2018-03-27 17:07:06
 */

namespace Alipay\Request;

class AlipayOfflineMarketShopApplyorderCancelRequest extends AbstractAlipayRequest
{

    /**
     * 申请流水撤销
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
