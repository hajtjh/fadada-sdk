<?php
namespace fadadaApi\data;


/**
 * 用户管理类
 * Class FddUserManage
 */
class FddUserManage extends FddDataBase
{
    /**
     * 设置 合同ID
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }

    /**
     * 设置 用户ID
     * @param string $value
     **/
    public function SetCustomer_id($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     * 判断 用户ID 是否存在
     * @return true 或 false
     **/
    public function IsCustomer_idSet()
    {
        return array_key_exists('customer_id', $this->values);
    }

    /**
     * 设置 电子邮箱
     * @param string $value
     **/
    public function SetEmail($value)
    {
        $this->values['email'] = $value;
    }

    /**
     * 设置 手机号码
     * @param string $value
     **/
    public function SetMobile($value)
    {
        $this->values['mobile'] = $value;
    }
}
