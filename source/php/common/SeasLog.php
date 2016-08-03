<?php

//Start of seaslog

class SeasLog {
    
    public static function setBasePath ($basePath) {}
    
    public static function getBasePath () {}
    
    public static function setLogger ($module) {}
    
    public static function getLastLogger () {}
    
    public static function analyzerCount ($level = 'all', $log_path = '*', $key_word = NULL) {}
    
    public static function analyzerDetail ($level = SEASLOG_EMERGENCY, $log_path = '*', $key_word = NULL, $start = 1, $limit = 20) {}
    
    public static function getBuffer () {}
    
    public static function debug ($message, array $content = array(), $module = '') {}
    
    public static function info ($message, array $content = array(), $module = '') {}
    
    public static function notice ($message, array $content = array(), $module = '') {}
    
    public static function warning ($message, array $content = array(), $module = '') {}
    
    public static function error ($message, array $content = array(), $module = '') {}
    
    public static function critical ($message, array $content = array(), $module = '') {}
    
    public static function alert ($message, array $content = array(), $module = '') {}
    
    public static function emergency ($message, array $content = array(), $module = '') {}
    
    public static function log ($level, $message, array $content = array(), $module = '') {}
}

define ('SEASLOG_DEBUG', "debug");
define ('SEASLOG_INFO', "info");
define ('SEASLOG_NOTICE', "notice");
define ('SEASLOG_WARNING', "warning");
define ('SEASLOG_ERROR', "error");
define ('SEASLOG_CRITICAL', "critical");
define ('SEASLOG_ALERT', "alert");
define ('SEASLOG_EMERGENCY', "emergency");

// End of seaslog