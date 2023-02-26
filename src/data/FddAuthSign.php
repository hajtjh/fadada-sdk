<?php
namespace fadadaApi\data;


/**
 * 授权自动签参数类
 *
 * Class FddAuthSign
 */
class FddAuthSign extends FddDataBase
{
    /**
     * 设置 签署时所传交易号
     * @param string $value
     **/
    public function SetTransaction_id($value)
    {
        $this->values['transaction_id'] = $value;
    }

    /**
     * 判断 签署时所传交易号 是否存在
     * @param string $value
     *
     * @return bool
     */
    public function IsTransaction_idSet()
    {
        return array_key_exists('transaction_id', $this->values);
    }

    /**
     * 设置授权类型：1:授权自动签（目前只能填1）
     *
     * @param $value
     */
    public function SetAuth_type($value)
    {
        $this->values['auth_type'] = $value;
    }

    /**
     * 判断授权类型是否存在
     *
     * @return bool
     */
    public function IsAuth_typeSet()
    {
        return array_key_exists('auth_type', $this->values);
    }

    /**
     * 设置 合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }

    /**
     * 判断 合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idSet()
    {
        return array_key_exists('contract_id', $this->values);
    }

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
     * 设置 页面跳转url（签署结果同步通知）
     * @param string $value
     **/
    public function SetReturn_url($value)
    {
        $this->values['return_url'] = $value;
    }

    /**
     * 判断 页面跳转url（签署结果同步通知） 是否存在
     **/
    public function IsReturn_urlSet()
    {
        return array_key_exists('return_url', $this->values);
    }

    /**
     * 设置 签署结果异步步通知url
     * @param string $value
     **/
    public function SetNotify_url($value)
    {
        $this->values['notify_url'] = $value;
    }

    /**
     * 设置 签署结果异步步通知url
     * @param string $value
     *
     * @return bool
     */
    public function IsNotify_urlSet()
    {
        return array_key_exists('notify_url', $this->values);
    }
}