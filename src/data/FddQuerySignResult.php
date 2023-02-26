<?php
namespace fadadaApi\data;


/**
 * 合同签署状态查询类
 * Class FddQuerySignResult
 */
class FddQuerySignResult extends FddDataBase
{
    /**
     * 设置 签署时所传合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }

    /**
     * 判断 签署时所传合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idSet()
    {
        return array_key_exists('contract_id', $this->values);
    }

    /**
     * 设置 签署时所传客户编号
     * @param string $value
     **/
    public function SetCustomer_id($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     * 判断 签署时所传客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCustomer_idSet()
    {
        return array_key_exists('customer_id', $this->values);
    }

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
     **/
    public function IsTransaction_idSet()
    {
        return array_key_exists('transaction_id', $this->values);
    }


}
