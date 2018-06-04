<?php
/**
 * Created by PhpStorm.
 * User: junhao
 * Date: 2018/5/29
 * Time: 22:22
 */

namespace app\lib\exception;


use think\Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
//    定义成员变量
//    抛出异常的http状态码、抛出异常的错误信息、抛出异常的错误码
    private $code;
    private $msg;
    private $errorCode;
    public function render(\Exception $e)
    {
        if($e instanceof BaseException){
//            如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }
        else{
            if(config('app_debug')){
                return parent::render($e);
            }
            else{
                $this->code = 500;
                $this->msg = '服务器内部错误';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }

        }
        $request = Request::instance();

        $result = [
            'msg'=>$this->msg,
            'errorCode'=>$this->errorCode,
            'request_url'=>$request->url()
        ];
        return json($result,$this->code);
    }
    private function recordErrorLog(\Exception $e){
        Log::init([
            // 日志记录方式，内置 file socket 支持扩展
            'type' => 'File',
            // 日志保存目录
            'path' => LOG_PATH,
            // 日志记录级别
            'level' => ['error']
        ]);
        Log::record($e->getMessage(),'error');
    }
}

