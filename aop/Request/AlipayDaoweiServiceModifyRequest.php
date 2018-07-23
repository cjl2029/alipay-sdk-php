<?php
/**
 * ALIPAY API: alipay.daowei.service.modify request
 *
 * @author auto create
 * @since  1.0, 2018-06-26 14:23:36
 */

namespace Alipay\Request;

class AlipayDaoweiServiceModifyRequest extends AbstractAlipayRequest
{

    /**
     * 创建或更新服务信息接口
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
