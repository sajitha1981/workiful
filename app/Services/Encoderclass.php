<?php namespace App\Services;

if (!defined('K_ENCODER_CLASS_EXISTED')) {
define('K_ENCODER_CLASS_EXISTED',TRUE);

class Encoderclass{
 var $OriginalStr	= '';
 var $EncodedStr	= '';
 var $DecodedStr	= '';
 var $ErrorStr		= '';
 var $mode			= '';
 
  /**
  * 27 ky tu hop le trong chuoi da ma hoa
  * @var unknown_type
  */
 var $ValidChars	= '\0!"#$%&\'()*+,-./0123456789:;';
 var $Error			= '';
 
 /**
  * Class's Errors is to feed $this->Error
  * @var Array of String
  */
 var $Errors		= array('1'=>"Ky tu trong day can giai ma khong hop le!<br>");

	/**
	 * Constructor
	 *
	 * @param String $str
	 * @param String(encode|decode) $mode
	 * @return Encoderclass
	 */
	function Encoderclass($str='',$mode='encode') {
		$this->OriginalStr = $str;
		if($mode=='encode') { 
			$this->mode = 'encode';
			$this->DecodedStr = $str;
			//Encode Function
			return $this->encode();
		} else {
			$this->mode = 'decode';
			if($this->check_encoded_str($this->OriginalStr)==false){
				$this->Error = $this->Errors['1'];
				//echo $this->Error;
			} else {
				$this->EncodedStr = $str;
				//Decode Function
				return $this->decode();
			};
		};
	}

	function encode(){
		$this->encode_string1();
		$this->encode_string2();
		return $this->EncodedStr;
	}
	
	function encode_string1(){
		$str = $this->OriginalStr;
		$l = strlen($str);
		$return = "";
		for($i=0;$i<$l;$i++){
			$char = substr($str,$i,1);
			$char = ord($char);
			$char = $this->general_10to3($char);
			$char = $this->fill_full_char_number($char,7);
			$return .= $char;
		};
		$this->EncodedStr = $return;
		return $return;
	}
	
	function encode_string2(){
		$str = $this->EncodedStr;
		$str = $this->fill_full_char_number($str,3);
		$l = strlen($str);
		$return = "";
		for($i=0;$i<$l;$i=$i+3){
			$char = substr($str,$i,3);
			$char = $this->general_3to10($char);
			$char = $char + 33;
			$char = chr($char);
			$return .= $char;
		};
		$this->EncodedStr = $return;
		return $return;
	}

	function decode(){
		$this->decode_string1();
		$this->decode_string2();
		return $this->DecodedStr;
	}
	
	function decode_string1(){
		$str = $this->OriginalStr;
		$l = strlen($str);
		$return = "";
		for($i=0;$i<$l;$i=$i+1){
			$char = substr($str,$i,1);
			$char = ord($char);
			$char = $char - 33;
			$char = $this->general_10to3($char);
			$char = $this->fill_full_char_number($char,3);
			$return .= $char;
		};
		$this->DecodedStr = $return;
		return $return;
	}
	
	function decode_string2(){
		$str = $this->drop_0s($this->DecodedStr);
		$str = $this->fill_full_char_number($str,7);
		$l = strlen($str);
		$return = "";
		for($i=0;$i<$l;$i=$i+7){
			$char = (int)substr($str,$i,7);
			$char = $this->general_3to10($char);
			$char = chr($char);
			$return .= $char;
		};
		$this->DecodedStr = $return;
		return $return;
	}
	
	/**
	 * Chuyen 1 so tu` he 10phan sang he 3phan
	 *
	 * @param Number $num
	 * @return Number
	 */
	function general_10to3($num){
		$num10	= (int)($num);
		$num5	= "";
		do{
			$num5  = ($num10 % 3).$num5;
			$num10 = floor($num10/3);
		}while($num10>0);
		return $num5;
	}
	
	/**
	 * Chuyen 1 so tu` he 3phan sang he 10phan
	 *
	 * @param Number $num
	 * @return Number
	 */
	function general_3to10($num){
		$num3	= (int)($num);
		$num10	= 0;
		$l = strlen($num3);
		for($i=0;$i<$l;$i++){
			$num10 += (int)(substr($num3,$l-$i-1,1))*pow(3,$i);
		};
		return $num10;
	}

	/**
	 * Add 0
	 *
	 * @param Number $num
	 * @param Integer $num_of_0s
	 * @return String (Number)
	 */
	function add_0s($num,$num_of_0s=0){
		$return = $num;
		for($i=1;$i<=$num_of_0s;$i++)
			$return = "0".$return;
		return $return;
	}
	
	/**
	 * Them cac so 0 cho du $fullnum chu so
	 *
	 * @param Number $num
	 * @param Integer $fullnum
	 * @return String (Number)
	 */
	function fill_full_char_number($num,$fullnum=3){
		$num	= $num;
		$l		= strlen($num) % $fullnum;
		if($l!=0)
			$num = $this->add_0s($num,$fullnum-$l);
		return $num;
	}

	/**
	 * Check if char is number char
	 *
	 * @param Char $char
	 * @return Boolean
	 */
	function is_num_char($char){
		$char = substr($char,0,1);
		switch($char){
			case "0": return true; break;
			case "1": return true; break;
			case "2": return true; break;
			case "3": return true; break;
			case "4": return true; break;
			case "5": return true; break;
			case "6": return true; break;
			case "7": return true; break;
			case "8": return true; break;
			case "9": return true; break;
			default : return false; break;
		};
	}
	
	/**
	 * Filt, Select only number characters
	 *
	 * @param String $str
	 * @return String (Number)
	 */
	function fix_str($str){
		$l = strlen($str);
		$return = "";
		for($i=0;$i<$l;$i++){
			$char = substr($str,$i,1);
			if($this->is_num_char($char)){
				$return .= $char;
			};
		};
		return $return;
	}
	
	function drop_0s($str){
		$l = strlen($str);
		$i = -1;
		do{
			$i++;
			$char = substr($str,$i,1);
		}while($char=="0" && $i<$l);
		$return = substr($str,$i);
		return $return;
	}
	
	/**
	 * Kiem tra chuoi $OriginalStr trong truo`ng hop $mode=='decode'
	 *
	 * @param String $str
	 * @return Boolean
	 */
	function check_encoded_str($str){
		$l = strlen($str);
		for($i=0;$i<$l;$i++){
			$char	= substr($str,$i,1);
			$pos	= strrpos($this->ValidChars,$char);
			if(!$pos){
				echo strrpos($this->ValidChars,$char);
				return false;
			};
		};
		return true;
	}
}

}
?>