<?php

namespace fadadaApi;
/**
 *   配置账号信息
 */
class FddConfig
{
	//=======【基本信息设置】=====================================
	/**
	 * FddServer ：法大大接口调用地址（必须配置）
	 *
	 */
	//通用接口调用地址
//    const FddServer     = 'https://textapi.fadada.com/api2';
	const FddServer = 'http://test.api.fabigbig.com:8888/api';
	//法大大企业页面认证接口调用地址
	const FddServerSyncCompany = 'https://partner-test.fadada.com';
	// 法大大存证服务地址
	const FDDWitnessServer = "http://czapi-test.fadada.com:7500/evidence-api";

	//=======【法大大商户密钥信息】===================================
	/**
	 * AppId ：接入方的ID
	 *
	 * ApiPort：接入方的密钥
	 *
	 */
	const AppId = '407316';
    const AppSecret = 'gWnJ7nMhJPI7n3xTVwWkq0xA';
    const CustomerId = '59847B7ECB099372FF2984254B8FB7C8';


}
