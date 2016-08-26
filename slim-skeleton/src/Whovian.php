<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/8/26
 * Time: 12:12
 */
class Whovian{
    protected  $favoriteDoctor;

    public function __construct($favoriteDoctor){
        $this->favoriteDoctor = (string)$favoriteDoctor;
    }
    public function say(){
        return 'the best doctor is '.$this->favoriteDoctor;
    }

    public function respondTo($input){
        $input = strtolower($input);
        $myDoctor = strtolower($this->favoriteDoctor);
        if(strpos($input,$myDoctor) === false){
            //echo 'sss';
            throw new Exception(
                sprintf('no %s',$this->favoriteDoctor)
            );
        }

        return 'i agree';
    }
}