<?php
/**
 * ALIPAY API: alipay.open.app.qrcode.create request
 *
 * @author auto create
 * @since  1.0, 2018-01-15 16:43:22
 */

namespace Alipay\Request;

class AlipayOpenAppQrcodeCreateRequest extends AbstractAlipayRequest
{

    /**
     * 小程序生成推广二维码接口
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
