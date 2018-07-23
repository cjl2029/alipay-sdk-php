<?php
/**
 * ALIPAY API: alipay.open.public.matchuser.label.delete request
 *
 * @author auto create
 * @since  1.0, 2018-05-11 19:08:32
 */

namespace Alipay\Request;

class AlipayOpenPublicMatchuserLabelDeleteRequest extends AbstractAlipayRequest
{

    /**
     * 匹配用户标签删除接口
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
