<?php
/**
 * ALIPAY API: koubei.advert.delivery.discount.authweb.batchquery request
 *
 * @author auto create
 * @since  1.0, 2018-01-30 11:51:23
 */

namespace Alipay\Request;

class KoubeiAdvertDeliveryDiscountAuthwebBatchqueryRequest extends AbstractAlipayRequest
{

    /**
     * 广告内容查询
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
