<?php 
namespace Jsnlib;
/**
 * 驗證 API 輸入的參數
 */
class Validation 
{
    /**
     * 沒有填寫參數？
     */
    static public function no_input($data, array $options = []): bool
    {
        return self::input($data, $options) === false;
    }

    /**
     * 有填寫參數？
     * TRUE             O
     * FALSE            O
     * NULL             X
     * (string)''       X
     * (int)0           O
     * (float)0.5       O
     * (int)-1          O
     * (int)1           O
     * (string)'1'      O
     * (string)'0'      O
     * (object) Class   O
     * @param  $data    判斷的值
     * @param  array    $options  擴充的額外判斷  
     */
    static public function input($data, array $options = []): bool
    {
        if (isset($options['string_empty']) and $options['string_empty'] === true)
        {
            return 
            (
                !is_null($data)
            ) 
                ? true
                : false;
        }

        return 
        (
            !is_null($data) and
            $data !== ""
        ) 
            ? true
            : false;
    }

    
}