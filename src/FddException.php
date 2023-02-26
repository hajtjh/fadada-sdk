<?php

namespace fadadaApi;

use Exception;
use think\facade\Log;

/**
 *
 * 异常处理类
 *
 */
class FddException extends Exception
{

	public function errorMessage() : string
    {
        return $this->getMessage();
//		header('content-type: application/json; charset=utf-8');
//		Log::write($this->getMessage(),'法大大错误日志:');
//		json([
//			'code'    => 210,
//			'message' => $this->getMessage(),
//			'data'    => []
//		])->send();
	}
}
