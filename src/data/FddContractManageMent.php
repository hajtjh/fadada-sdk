<?php
namespace fadadaApi\data;

/**
 * 合同管理类
 * Class FddContractManageMent
 */
class FddContractManageMent extends FddDataBase
{
    /**
     * 设置 合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }

    /**
     * 获取 签署时所传合同编号
     * @param string $value
     **/
    public function GetContract_id()
    {
        return $this->values['contract_id'];
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
     * 设置 合同编号（多）
     * @param string $value
     **/
    public function SetContract_ids($value)
    {
        $this->values['contract_ids'] = $value;
    }

    /**
     * 判断 签署时所传合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idsSet()
    {
        return array_key_exists('contract_ids', $this->values);
    }

    /**
     * 设置用户ID
     * @param string $value
     **/
    public function SetCustomer_id($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     * 设置 有效期
     * @param string $value
     **/
    public function SetValidity($value)
    {
        $this->values['validity'] = $value;
    }

    /**
     * 判断 有效期 是否存在
     * @param string $value
     **/
    public function IsValiditySet()
    {
        return array_key_exists('validity', $this->values);
    }

    /**
     * 设置 有效次数
     * @param string $value
     **/
    public function SetQuantity($value)
    {
        $this->values['quantity'] = $value;
    }

    /**
     * 判断 有效次数 是否存在
     * @return true 或 false
     **/
    public function IsQuantitySet()
    {
        return array_key_exists('quantity', $this->values);
    }
}