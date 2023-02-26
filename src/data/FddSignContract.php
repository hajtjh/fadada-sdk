<?php

namespace fadadaApi\data;


/**
 * 合同签署类
 * Class FddSignContract
 */
class FddSignContract extends FddDataBase
{

	/**
	 * 设置 存证方案手动签署时所传身份证--用于刷脸验证，姓名和身份证需要同时传
	 *
	 * @param string $value
	 **/
	public function SetCustomerIdentNo($value)
	{
		$this->values['customer_ident_no'] = $value;
	}

	/**
	 * 获取 存证方案手动签署时所传身份证--用于刷脸验证，姓名和身份证需要同时传
	 *
	 * @param string $value
	 **/
	public function GetCustomerIdentNo()
	{
		return $this->values['customer_ident_no'];
	}

	/**
	 * 判断 存证方案手动签署时所传身份证 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsCustomerIdentNoSet()
	{
		return array_key_exists('customer_ident_no', $this->values);
	}

	/**
	 * 设置 存证方案手动签署时所传姓名--用于刷脸验证，姓名和身份证需要同时传
	 *
	 * @param string $value
	 **/
	public function SetCustomerName($value)
	{
		$this->values['customer_name'] = $value;
	}

	/**
	 * 获取 存证方案手动签署时所传姓名--用于刷脸验证，姓名和身份证需要同时传
	 *
	 * @param string $value
	 **/
	public function GetCustomerName()
	{
		return $this->values['customer_name'];
	}

	/**
	 * 判断 存证方案手动签署时所传姓名 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsCustomerNameSet()
	{
		return array_key_exists('customer_name', $this->values);
	}

	/**
	 * 设置 存证方案手动签署时所传手机号
	 *
	 * @param string $value
	 **/
	public function SetCustomerMobile($value)
	{
		$this->values['customer_mobile'] = $value;
	}

	/**
	 * 获取 存证方案手动签署时所传手机号
	 *
	 * @param string $value
	 **/
	public function GetCustomerMobile()
	{
		return $this->values['customer_mobile'];
	}

	/**
	 * 判断 存证方案手动签署时所传手机号 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsCustomerMobileSet()
	{
		return array_key_exists('customer_mobile', $this->values);
	}

	/**
	 * 设置 签署时所传合同编号
	 *
	 * @param string $value
	 **/
	public function SetContract_id($value)
	{
		$this->values['contract_id'] = $value;
	}

	/**
	 * 获取 签署时所传合同编号
	 *
	 * @param string $value
	 **/
	public function GetContract_id()
	{
		return $this->values['contract_id'];
	}

	/**
	 * 判断 签署时所传合同编号 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsContract_idSet()
	{
		return array_key_exists('contract_id', $this->values);
	}

	/**
	 * 设置 签署时所传客户编号
	 *
	 * @param string $value
	 **/
	public function SetCustomer_id($value)
	{
		$this->values['customer_id'] = $value;
	}

	/**
	 * 获取 签署时所传合同编号
	 *
	 * @param string $value
	 **/
	public function GetCustomer_id()
	{
		return $this->values['customer_id'];
	}

	/**
	 * 判断 签署时所传客户编号 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsCustomer_idSet()
	{
		return array_key_exists('customer_id', $this->values);
	}

	/**
	 * 设置 签署时所传交易号
	 *
	 * @param string $value
	 **/
	public function SetTransaction_id($value)
	{
		$this->values['transaction_id'] = $value;
	}

	/**
	 * 获取 是否设置有效期
	 *
	 * @param string $value
	 **/
	public function GetTransaction_id()
	{
		return $this->values['transaction_id'];
	}

	/**
	 * 判断 签署时所传交易号 是否存在
	 **/
	public function IsTransaction_idSet()
	{
		return array_key_exists('transaction_id', $this->values);
	}

	/**
	 * 设置 有效时间
	 *
	 * @param string $value
	 **/
	public function SetExpire_time($value)
	{
		$this->values['expire_time'] = $value;
	}

	/**
	 * 设置 传入url
	 *
	 * @param string $value
	 **/
	public function SetSource_url($value)
	{
		$this->values['source_url'] = $value;
	}

	/**
	 * 判断 传入url 是否存在
	 **/
	public function IsSource_urlSet()
	{
		return array_key_exists('source_url', $this->values);
	}

	/**
	 * 设置 短信标识
	 *
	 * @param string $value
	 **/
	public function SetPush_type($value)
	{
		$this->values['push_type'] = $value;
	}

	/**
	 * 判断 短信标识 是否存在
	 **/
	public function IsPush_typeSet()
	{
		return array_key_exists('push_type', $this->values);
	}

	/**
	 * 设置 定位关键字
	 *
	 * @param string $value
	 **/
	public function SetSign_keyword($value)
	{
		$this->values['sign_keyword'] = $value;
	}

	/**
	 * 获取 有效期
	 **/
	public function GetSign_keyword()
	{
		return $this->values['sign_keyword'];
	}

	/**
	 * 判断 定位关键字 是否存在
	 **/
	public function IsSign_keywordSet()
	{
		return array_key_exists('sign_keyword', $this->values);
	}

	/**
	 * 设置 定位关键字(多)
	 *
	 * @param string $value
	 **/
	public function SetSign_keywords($value)
	{
		$this->values['sign_keywords'] = $value;
	}

	/**
	 * 判断 定位关键字（多） 是否存在
	 **/
	public function IsSign_keywordsSet()
	{
		return array_key_exists('sign_keywords', $this->values);
	}

	/**
	 * 设置 是否设置有效期
	 *
	 * @param string $value
	 **/
	public function SetLimit_type($value)
	{
		$this->values['limit_type'] = $value;
	}

	/**
	 * 获取 是否设置有效期
	 **/
	public function GetLimit_type()
	{
		return $this->values['limit_type'];
	}

	/**
	 * 判断 是否设置有效期 是否存在
	 **/
	public function IsLimit_typeSet()
	{
		return array_key_exists('limit_type', $this->values);
	}

	/**
	 * 设置 有效期
	 *
	 * @param string $value
	 **/
	public function SetValidity($value)
	{
		$this->values['validity'] = $value;
	}

	/**
	 * 获取 有效期
	 **/
	public function GetValidity()
	{
		return $this->values['validity'];
	}

	/**
	 * 判断 有效期 是否存在
	 **/
	public function IsValiditySet()
	{
		return array_key_exists('validity', $this->values);
	}

	/**
	 * 设置 页面跳转url（签名结果同步通知）
	 *
	 * @param string $value
	 **/
	public function SetReturn_url($value)
	{
		$this->values['return_url'] = $value;
	}

	/**
	 * 判断 页面跳转url（签名结果同步通知） 是否存在
	 **/
	public function IsReturn_urlSet()
	{
		return array_key_exists('return_url', $this->values);
	}

	/**
	 * 设置 签名结果异步步通知url
	 *
	 * @param string $value
	 **/
	public function SetNotify_url($value)
	{
		$this->values['notify_url'] = $value;
	}

	/**
	 * 设置 签名结果异步步通知url
	 *
	 * @param string $value
	 **/
	public function IsNotify_urlSet()
	{
		return array_key_exists('notify_url', $this->values);
	}

	/**
	 * 设置 文档标题
	 *
	 * @param string $value
	 **/
	public function SetDoc_title($value)
	{
		$this->values['doc_title'] = $value;
	}

	/**
	 * 获取 文档标题
	 *
	 * @param string $value
	 **/
	public function GetDoc_title()
	{
		return $this->values['doc_title'];
	}

	/**
	 * 判断 文档标题 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsDoc_titleSet()
	{
		return array_key_exists('doc_title', $this->values);
	}

	/**
	 * 设置 手写章
	 *
	 * @param string $value
	 **/
	public function SetHandsignimg($value)
	{
		$this->values['handsignimg'] = $value;
	}

	/**
	 * 设置 短信验证码
	 *
	 * @param string $value
	 **/
	public function SetSms($value)
	{
		$this->values['sms'] = $value;
	}

	/**
	 * 判断 短信验证码 是否存在
	 *
	 * @param string $value
	 **/
	public function IsSmsSet()
	{
		return array_key_exists('sms', $this->values);
	}

	/**
	 * 设置 短信校验令牌
	 *
	 * @param string $value
	 **/
	public function SetMarkUUID($value)
	{
		$this->values['markUUID'] = $value;
	}

	/**
	 * 判断 短信校验令牌 是否存在
	 *
	 * @param string $value
	 **/
	public function IsMarkUUIDSet()
	{
		return array_key_exists('markUUID', $this->values);
	}

	/**
	 * 设置 批量签署记录主键
	 *
	 * @param string $value
	 **/
	public function SetExtBatchSignId($value)
	{
		$this->values['extBatchSignId'] = $value;
	}

	/**
	 * 判断 批量签署记录主键 是否存在
	 *
	 * @param string $value
	 **/
	public function IsExtBatchSignIdSet()
	{
		return array_key_exists('extBatchSignId', $this->values);
	}

	/**
	 * 设置 填充内容
	 *
	 * @param string $value
	 **/
	public function SetParameter_map($value)
	{
		$this->values['parameter_map'] = $value;
	}

	/**
	 * 判断 填充内容 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsParameter_mapSet()
	{
		return array_key_exists('parameter_map', $this->values);
	}

	/**
	 * 设置 签署截止时间
	 *
	 * @param string $value
	 **/
	public function SetExpiration_time($value)
	{
		$this->values['expiration_time'] = $value;
	}

	/**
	 * 判断 签署截止时间 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsExpiration_timeSet()
	{
		return array_key_exists('expiration_time', $this->values);
	}

	/**
	 * 设置 是否发送通知（短信 及邮件）
	 *
	 * @param string $value
	 **/
	public function SetSend_msg($value)
	{
		$this->values['send_msg'] = $value;
	}

	/**
	 * 判断 是否发送通知（短信 及邮件） 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsSend_msgSet()
	{
		return array_key_exists('send_msg', $this->values);
	}

	/**
	 * 设置 待签署人姓名
	 *
	 * @param string $value
	 **/
	public function SetUser_names($value)
	{
		$this->values['user_names'] = $value;
	}

	/**
	 * 判断 待签署人姓名 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsUser_namesSet()
	{
		return array_key_exists('user_names', $this->values);
	}

	/**
	 * 设置 待签署人手机号
	 *
	 * @param string $value
	 **/
	public function SetUser_mobiles($value)
	{
		$this->values['user_mobiles'] = $value;
	}

	/**
	 * 判断 待签署人手机号 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsUser_mobilesSet()
	{
		return array_key_exists('user_mobiles', $this->values);
	}

	/**
	 * 设置 待签署人邮箱
	 *
	 * @param string $value
	 **/
	public function SetUser_emails($value)
	{
		$this->values['user_emails'] = $value;
	}

	/**
	 * 判断 待签署人邮箱 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsUser_emailsSet()
	{
		return array_key_exists('user_emails', $this->values);
	}

	/**
	 * 设置 批次号（流水号）
	 *
	 * @param string $value
	 **/
	public function SetBatch_id($value)
	{
		$this->values['batch_id'] = $value;
	}

	/**
	 * 获取 批次号（流水号）
	 *
	 * @param string $value
	 **/
	public function GetBatch_id()
	{
		return $this->values['batch_id'];
	}

	/**
	 * 判断 批次号（流水号） 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsBatch_idSet()
	{
		return array_key_exists('batch_id', $this->values);
	}

	/**
	 * 设置 代理人客户编号
	 *
	 * @param string $value
	 **/
	public function SetOuth_customer_id($value)
	{
		$this->values['outh_customer_id'] = $value;
	}

	/**
	 * 获取 代理人客户编号
	 *
	 * @param string $value
	 **/
	public function GetOuth_customer_id()
	{
		return $this->values['outh_customer_id'];
	}

	/**
	 * 判断 代理人客户编号 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsOuth_customer_idSet()
	{
		return array_key_exists('outh_customer_id', $this->values);
	}

	/**
	 * 设置 签章数据
	 *
	 * @param string $value
	 **/
	public function SetSign_data($value)
	{
		$this->values['sign_data'] = $value;
	}

	/**
	 * 获取 签章数据
	 *
	 * @param string $value
	 **/
	public function GetSign_data()
	{
		return $this->values['sign_data'];
	}

	/**
	 * 判断 签章数据 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsSign_dataSet()
	{
		return array_key_exists('sign_data', $this->values);
	}

	/**
	 * 设置 批量请求标题
	 *
	 * @param string $value
	 **/
	public function SetBatch_title($value)
	{
		$this->values['batch_title'] = $value;
	}

	/**
	 * 获取 批量请求标题
	 *
	 * @param string $value
	 **/
	public function GetBatch_title()
	{
		return $this->values['batch_title'];
	}

	/**
	 * 判断 批量请求标题 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsBatch_titleSet()
	{
		return array_key_exists('batch_title', $this->values);
	}

	/**
	 * 设置 客户类型
	 *
	 * @param string $value
	 **/
	public function SetClientType($value)
	{
		$this->values['clientType'] = $value;
	}

	/**
	 * 判断 客户类型 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsClientTypeSet()
	{
		return array_key_exists('clientType', $this->values);
	}

	/**
	 * 设置 客户角色
	 *
	 * @param string $value
	 **/
	public function SetClient_role($value)
	{
		$this->values['client_role'] = $value;
	}

	/**
	 * 判断 客户角色 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsClient_roleSet()
	{
		return array_key_exists('client_role', $this->values);
	}

	/**
	 * 设置 有效次数
	 *
	 * @param string $value
	 **/
	public function SetQuantity($value)
	{
		$this->values['quantity'] = $value;
	}

	/**
	 * 获取 有效次数
	 *
	 * @param string $value
	 **/
	public function GetQuantity()
	{
		return $this->values['quantity'];
	}

	/**
	 * 判断 有效次数 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsQuantitySet()
	{
		return array_key_exists('quantity', $this->values);
	}

	/**
	 * 设置 关键字签章策略
	 *
	 * @param string $value
	 **/
	public function SetKeyword_strategy($value)
	{
		$this->values['keyword_strategy'] = $value;
	}

	/**
	 * 判断 关键字签章策略 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsKeyword_strategySet()
	{
		return array_key_exists('keyword_strategy', $this->values);
	}

	/**
	 * 设置 关键字签章策略
	 *
	 * @param string $value
	 **/
	public function SetAcrosspage_customer_id($value)
	{
		$this->values['acrosspage_customer_id'] = $value;
	}

	/**
	 * 判断 关键字签章策略 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsAcrosspage_customer_idSet()
	{
		return array_key_exists('acrosspage_customer_id', $this->values);
	}

	/**
	 * 设置 定位类型
	 *
	 * @param string $value
	 **/
	public function SetPosition_type($value)
	{
		$this->values['position_type'] = $value;
	}

	/**
	 * 获取 定位类型
	 *
	 * @param string $value
	 **/
	public function GetPosition_type()
	{
		return $this->values['position_type'];
	}

	/**
	 * 判断 定位类型 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsPosition_typeSet()
	{
		return array_key_exists('position_type', $this->values);
	}

	/**
	 * 设置 盖章点x坐标
	 *
	 * @param string $value
	 **/
	public function SetX($value)
	{
		$this->values['x'] = $value;
	}

	/**
	 * 获取 盖章点X坐标
	 *
	 * @param string $value
	 **/
	public function GetX()
	{
		return $this->values['x'];
	}

	/**
	 * 判断 盖章点x坐标 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsXSet()
	{
		return array_key_exists('x', $this->values);
	}

	/**
	 * 设置 签章页码，从0开始。
	 *
	 * @param string $value
	 **/
	public function SetPagenum($value)
	{
		$this->values['pagenum'] = $value;
	}

	/**
	 * 获取 盖章点Y坐标
	 *
	 * @param string $value
	 **/
	public function GetPagenum()
	{
		return $this->values['pagenum'];
	}

	/**
	 * 判断 签章页码，从 0开始。 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsPagenumSet()
	{
		return array_key_exists('pagenum', $this->values);
	}

	/**
	 * 设置 定位坐标
	 * 签署企业合同时,不需要进行url编码
	 *
	 * @param array $value
	 **/
	public function SetSignature_positions($value, $isUrlEncode = true, $isJsonEncode = true)
	{
		if ($isJsonEncode) {
			$value = json_encode($value);
		}
		if ($isUrlEncode) {
			$value = urlencode($value);
		}
		$this->values['signature_positions'] = $value;
	}


	public function GetSignature_positions()
	{
		return $this->values['signature_positions'];
	}

	/**
	 * @return bool
	 */
	public function IsSignature_positions_Set()
	{
		return array_key_exists('signature_positions', $this->values);
	}

	/**
	 * 设置 盖章点Y坐标
	 *
	 * @param string $value
	 **/
	public function SetY($value)
	{
		$this->values['y'] = $value;
	}

	/**
	 * 获取 盖章点Y坐标
	 *
	 * @param string $value
	 **/
	public function GetY()
	{
		return $this->values['y'];
	}

	/**
	 * 判断 盖章点Y坐标 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsYSet()
	{
		return array_key_exists('Y', $this->values);
	}

	/**
	 * 设置 签章图片类型
	 *
	 * @param string $value
	 **/
	public function SetShow_type($value)
	{
		$this->values['show_type'] = $value;
	}

	/**
	 * 设置 替换标志
	 *
	 * @param string $value
	 **/
	public function SetReplace_signature_flag($value)
	{
		$this->values['replace_signature_flag'] = $value;
	}

	/**
	 * 设置 合同 url 地址
	 *
	 * @param string $value
	 **/
	public function SetDoc_url($value)
	{
		$this->values['doc_url'] = $value;
	}

	/**
	 * 判断 合同 url 地址 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsDoc_urlSet()
	{
		return array_key_exists('doc_url', $this->values);
	}

	/**
	 * 设置 合同流文件
	 *
	 * @param string $value
	 **/
	public function SetFile($value)
	{
		$this->values['file'] = $value;
	}

	/**
	 * 判断 合同流文件 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsFileSet()
	{
		return array_key_exists('file', $this->values);
	}

	/**
	 * 是否允许用户页面修改 1允许，2不允许
	 *
	 * @param $value
	 */
	public function SetPageModify($value)
	{
		$this->values['page_modify'] = $value;
	}

	/**
	 *  判断 是否允许用户页面修改 是否存在
	 *
	 * @return bool
	 */
	public function IsPageModifySet()
	{
		return array_key_exists('page_modify', $this->values);
	}

	/**
	 * 是否支持身份证以外其他证件类型:0：不支持（默认）；1：支持
	 *
	 * @return
	 **/
	public function GetCustomerIdentType()
	{
		return $this->values['customer_ident_type'];
	}

	/**
	 * 判断 是否支持身份证以外其他证件类型:0：不支持（默认）；1：支持 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsCustomerIdentType()
	{
		return array_key_exists('customer_ident_type', $this->values);
	}

	/**
	 * 设置 证书类型
	 *
	 * @param $value
	 */
	public function SetCertType($value)
	{
		$this->values['cert_type'] = $value;
	}

	/**
	 * 判断 证书类型 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsCertTypeSet()
	{
		return array_key_exists('cert_type', $this->values);
	}

	/**
	 * 设置 手机号码
	 *
	 * @param string $value
	 **/
	public function SetMobile($value)
	{
		$this->values['mobile'] = $value;
	}

	/**
	 * 判断 手机号码 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsMobileSet()
	{
		return array_key_exists('mobile', $this->values);
	}

	/**
	 * 设置 地区码
	 *
	 * @param $value
	 */
	public function SetAreaCode($value)
	{
		$this->values['area_code'] = $value;
	}

	/**
	 * 判断 地区码 是否存在
	 *
	 * @return bool
	 */
	public function IsAreaCodeSet()
	{
		return array_key_exists('area_code', $this->values);
	}

	/**
	 * 设置 签章类型
	 *
	 * @param $value
	 */
	public function SetMobile_sign_type($value)
	{
		$this->values['mobile_sign_type'] = $value;
	}

	/**
	 * 判断 签章类型 是否存在
	 *
	 * @return bool
	 */
	public function IsMobile_sign_typeSet()
	{
		return array_key_exists('mobile_sign_type', $this->values);
	}

	/**
	 * 设置 认证结果异步回调地址
	 *
	 * @param $value
	 */
	public function SetVerified_notify_url($value)
	{
		$this->values['verified_notify_url'] = $value;
	}

	/**
	 * 判断 认证结果异步回调地址 是否存在
	 *
	 * @return bool
	 */
	public function IsVerified_notify_urlSet()
	{
		return array_key_exists('verified_notify_url', $this->values);
	}

	/**
	 * 实名认证套餐类型
	 *
	 * @param $value
	 */
	public function SetVerifiedWay($value)
	{
		$this->values['verified_way'] = $value;
	}

	/**
	 *  判断 实名认证套餐类型 是否存在
	 *
	 * @return bool
	 */
	public function IsVerifiedWaySet()
	{
		return array_key_exists('verified_way', $this->values);
	}

	/**
	 * 个人实名认证刷脸未通过是否允许人工审核
	 *
	 * @param $value
	 */
	public function SetPerson_auth_fail_allow_manual_audit($value)
	{
		$this->values['person_auth_fail_allow_manual_audit'] = $value;
	}

	/**
	 *  判断 个人实名认证刷脸未通过是否允许人工审核 是否存在
	 *
	 * @return bool
	 */
	public function IsPerson_auth_fail_allow_manual_auditSet()
	{
		return array_key_exists('person_auth_fail_allow_manual_audit', $this->values);
	}

	/**
	 * 银行卡号
	 *
	 * @param $value
	 */
	public function SetBankCardNo($value)
	{
		$this->values['bank_card_no'] = $value;
	}

	/**
	 *  判断 银行卡号 是否存在
	 *
	 * @return bool
	 */
	public function IsBankCardNoSet()
	{
		return array_key_exists('bank_card_no', $this->values);
	}

	/**
	 * 设置 证件正面照下载地址
	 *
	 * @param string $value
	 **/
	public function SetIdentFrontPath($value)
	{
		$this->values['ident_front_path'] = $value;
	}

	/**
	 * 获取 证件正面照下载地址
	 *
	 * @return
	 **/
	public function GetIdentFrontPath()
	{
		return $this->values['ident_front_path'];
	}

	/**
	 * 设置 证件反面照下载地址
	 *
	 * @param string $value
	 **/
	public function SetIdent_back_path($value)
	{
		$this->values['ident_back_path'] = $value;
	}

	/**
	 * 获取 证件反面照下载地址
	 *
	 * @return
	 **/
	public function GetIdent_back_path()
	{
		return $this->values['ident_back_path'];
	}

	/**
	 * 设置 是否需要上传身份证照片
	 *
	 * @param string $value
	 **/
	public function SetId_photo_optional($value)
	{
		$this->values['id_photo_optional'] = $value;
	}

	/**
	 * 获取 是否需要上传身份证照片
	 *
	 * @return
	 **/
	public function GetId_photo_optional()
	{
		return $this->values['id_photo_optional'];
	}

	/**
	 * 设置 印章是否显示时间
	 *
	 * @param string $value
	 **/
	public function SetSignature_show_time($value)
	{
		$this->values['signature_show_time'] = $value;
	}

	/**
	 * 设置 关键字偏移量，偏移x位置
	 *
	 * @param string $value
	 **/
	public function SetKeyx($value)
	{
		$this->values['keyx'] = $value;
	}

	/**
	 * 设置 关键字偏移量，偏移y位置
	 *
	 * @param string $value
	 **/
	public function SetKeyy($value)
	{
		$this->values['keyy'] = $value;
	}

	/**
	 * 设置 意愿认证方式
	 *
	 * @param string $value
	 **/
	public function SetVerification_type($value)
	{
		$this->values['verification_type'] = $value;
	}

	/**
	 * 设置 签章id
	 *
	 * @param string $value
	 **/
	public function SetSignature_id($value)
	{
		$this->values['signature_id'] = $value;
	}

	/**
	 * 设置 是否开启手写轨迹
	 *
	 * @param string $value
	 **/
	public function SetWriting_track($value)
	{
		$this->values['writing_track'] = $value;
	}

	/**
	 * 设置 合同必读时间
	 *
	 * @param string $value
	 **/
	public function SetRead_time($value)
	{
		$this->values['read_time'] = $value;
	}

	/**
	 * 设置 页面语言
	 *
	 * @param $value
	 */
	public function SetLang($value)
	{
		$this->values['lang'] = $value;
	}

	/**
	 * 设置 支持pc手写印章
	 *
	 * @param $value
	 */
	public function SetPc_hand_signature($value)
	{
		$this->values['pc_hand_signature'] = $value;
	}

	/**
	 * 设置 签署意愿方式
	 *
	 * @param $value
	 */
	public function SetSign_verify_way($value)
	{
		$this->values['sign_verify_way'] = $value;
	}

	/**
	 * 设置 签署意愿方式选择人脸识别时， 人脸识别失败后自动调整为短信
	 *
	 * @param $value
	 */
	public function SetVerify_way_flag($value)
	{
		$this->values['verify_way_flag'] = $value;
	}

	/**
	 * 设置 打开环境
	 *
	 * @param $value
	 */
	public function SetOpen_environment($value)
	{
		$this->values['open_environment'] = $value;
	}

	/**
	 * 设置 骑缝章id
	 *
	 * @param string $value
	 **/
	public function SetAcross_signature_id($value)
	{
		$this->values['across_signature_id'] = $value;
	}

	/**
	 * 判断 骑缝章id 是否存在
	 *
	 * @return true 或 false
	 **/
	public function IsAcross_signature_idSet()
	{
		return array_key_exists('across_signature_id', $this->values);
	}

}