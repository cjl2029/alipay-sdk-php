<?php
/**
 * ALIPAY API: koubei.item.extitem.query request
 *
 * @author auto create
 * @since  1.0, 2016-07-06 10:47:56
 */

namespace Alipay\Request;

class KoubeiItemExtitemQueryRequest extends AbstractAlipayRequest
{

    /**
     * 单个商品查询接口
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
