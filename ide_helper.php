<?php
namespace Lyue\Facades{
    class Log{
        public static function info($content){
            return  \Lyue\Application::getInstance()->make(\Lyue\Log\Log::class)->info($content);
        }
    }
}

