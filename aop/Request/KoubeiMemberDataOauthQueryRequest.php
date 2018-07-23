<?php
/**
 * ALIPAY API: koubei.member.data.oauth.query request
 *
 * @author auto create
 * @since  1.0, 2017-05-10 16:11:45
 */

namespace Alipay\Request;

class KoubeiMemberDataOauthQueryRequest extends AbstractAlipayRequest
{

    /**
     * 口碑业务授权令牌查询
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
