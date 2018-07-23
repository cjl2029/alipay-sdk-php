<?php
/**
 * ALIPAY API: alipay.eco.mycar.data.external.query request
 *
 * @author auto create
 * @since  1.0, 2018-03-06 20:18:29
 */

namespace Alipay\Request;

class AlipayEcoMycarDataExternalQueryRequest extends AbstractAlipayRequest
{

    /**
     * 行业平台外部查询请求
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
