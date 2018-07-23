<?php
/**
 * ALIPAY API: alipay.open.app.smsg.data.sync request
 *
 * @author auto create
 * @since  1.0, 2018-03-08 20:17:17
 */

namespace Alipay\Request;

class AlipayOpenAppSmsgDataSyncRequest extends AbstractAlipayRequest
{

    /**
     * To蚂蚁消息测试数据同步
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
