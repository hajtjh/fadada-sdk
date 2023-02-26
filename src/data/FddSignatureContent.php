<?php
namespace fadadaApi\data;

/**
 * 合规化方案 印章自定义内容
 * Class FddAccount
 */
class FddSignatureContent extends FddDataBase
{

    /**
     * 设置 客户编号
     * @param string $value
     **/
    public function SetCustomerId($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     * 判断 客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCustomerId()
    {
        return array_key_exists('customer_id', $this->values);
    }

    /**
     * @param string $value
     **/
    public function SetContent($value)
    {
        $this->values['content'] = $value;
    }

    /**
     * @return true 或 false
     **/
    public function IsContent()
    {
        return array_key_exists('content', $this->values);
    }
}