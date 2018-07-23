<?php
/**
 * ALIPAY API: alipay.data.dataservice.shoppingmallrec.shop.query request
 *
 * @author auto create
 * @since  1.0, 2017-08-15 19:53:06
 */

namespace Alipay\Request;

class AlipayDataDataserviceShoppingmallrecShopQueryRequest extends AbstractAlipayRequest
{

    /**
     * 商场店铺推荐
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
