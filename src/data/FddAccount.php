<?php
/**=========================================
 * Project: WiCMS框架系统
 * Description: ${CN}
 * User: jason
 * Date: 2022/6/16
 * Time: 2:52 PM
 * File: ${NAMESPACE}\FddAccount.php
 * =========================================
 */

namespace fadadaApi\data;

/**
 * 合规化方案 账号注册
 * Class FddAccount
 */
class FddAccount extends FddDataBase
{

	/**
	 * 设置 用户在接入方的唯一标识
	 *
	 * @param string $value
	 **/
	public function SetOpenID($value)
	{
		$this->values['open_id'] = $value;
	}

	/**
	 * 判断 唯一标识 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsOpenIDSet()
	{
		return array_key_exists('open_id', $this->values);
	}

	/**
	 * 设置用户类型 1:个人，2:企业
	 *
	 * @param string $value
	 **/
	public function SetAccountType($value)
	{
		$this->values['account_type'] = $value;
	}

	/**
	 * 判断 唯一标识 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsAccountTypeSet()
	{
		return array_key_exists('account_type', $this->values);
	}
}