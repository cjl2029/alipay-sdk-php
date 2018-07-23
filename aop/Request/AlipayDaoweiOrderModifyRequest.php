<?php
/**
 * ALIPAY API: alipay.daowei.order.modify request
 *
 * @author auto create
 * @since  1.0, 2018-03-23 13:23:16
 */

namespace Alipay\Request;

class AlipayDaoweiOrderModifyRequest extends AbstractAlipayRequest
{

    /**
     * 服务订单修改接口
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
