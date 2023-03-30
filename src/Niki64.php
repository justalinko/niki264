<?php
/**
 * @package Niki264
 * @version 1.0.0
 * @link https://github.com/justalinko/niki64
 * @license MIT
 * @author NK26 ( milio48 < https://github.com/milio48 > )
 * @author NIKI264 ( justalinko < https://github.com/justalinko > ) 
 */


use Justalinko\Iki64\Iki64;
Class Niki264
{
    protected $iki64;
    public function __construct()
    {
        $this->iki64 = new Iki64();
    }

    /**
     *  @param string $data
     * @method alpha2num
     * @return string
     * @example $this->alpha2num('a b c d e f g h i j k l m n o p q r s t u v w x y z');
     */
    public function alpha2num($data)
    {
        $a    = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',  'j',  'k',  'l',  'm',  'n',  'o',  'p',   'q',   'r',   's',   't',   'u',   'v',   'w',   'x',   'y',    'z', ' ');
        //                                       \                                              \                                      \
        $b    = array('2', '3', '4', '5', '6', '7', '8', '9', '12', '13', '14', '15', '16', '17', '18', '19', '112', '113', '114', '115', '116', '117', '118', '119', '1112', '1113', '0');         
        return str_replace($a, $b, $data);
    }

    /**
     *  @param string $data
     * @method num2alphaSafe
     * @return string
     * @example $this->num2alphaSafe('2 3 4 5 6 7 8 9 12 13 14 15 16 17 18 19 112 113 114 115 116 117 118 119 1112 1113 0');
     */
    public function alpha2numSafe($data)
    {
        $data = strtolower($data);
        $a    = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',  'j',  'k',  'l',  'm',  'n',  'o',  'p',   'q',   'r',   's',   't',   'u',   'v',   'w',   'x',   'y',    'z', ' ');
                //                                       \                                              \                                      \
        $b    = array('2', '3', '4', '5', '6', '7', '8', '9', '12', '13', '14', '15', '16', '17', '18', '19', '112', '113', '114', '115', '116', '117', '118', '119', '1112', '1113', '0');         
        return str_replace($a, $b, $data);
    }

    /**
     *  @param string $data
     * @method num2alpha
     * @return string
     * @example $this->num2alpha('2 3 4 5 6 7 8 9 12 13 14 15 16 17 18 19 112 113 114 115 116 117 118 119 1112 1113 0');
     */
    public function num2alpha($data)
    {
        $a    = array('y',      'z',  ' ');
        $b    = array('1112', '1113', '0');         
        $data = str_replace($b, $a, $data);
    
        $a    = array('q',   'r',   's',   't',   'u',   'v',   'w',   'x');
        $b    = array('112', '113', '114', '115', '116', '117', '118', '119');         
        $data = str_replace($b, $a, $data); 
    
        $a    = array('i',  'j',  'k',  'l',  'm',  'n',  'o',  'p');
        $b    = array('12', '13', '14', '15', '16', '17', '18', '19');         
        $data = str_replace($b, $a, $data); 
    
        $a    = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
        $b    = array('2', '3', '4', '5', '6', '7', '8', '9');         
        return str_replace($b, $a, $data); 
    }

    /**
     * @param string $data
     * @param string $key
     * @method encode
     * @return string
     * @example $this->encode('Hello World','key');
     */
    public function encode($data,$key = '')
    {
    
       if($key == '')
       {
         return new \Exception('Key is required');
       }else{
        return $this->iki64->iki64_encode($data,$key);
       }
    }

    /**
     * @param string $data
     * @param string $key
     * @method decode
     * @return string
     * @example $this->decode('Hello World','key');
     */
    public function decode($data,$key = '')
    {
        if($key == '')
        {
            return new \Exception('Key is required');
        }else{
            return $this->iki64->iki64_decode($data,$key);
        }
    }
}
