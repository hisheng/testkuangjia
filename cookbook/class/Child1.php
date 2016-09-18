<?php
/**
 * Created by PhpStorm.
 * User: zhanghaisheng
 * Date: 2016/9/18
 * Time: 14:06
 */
class Person{

    protected $name;
    protected $email;

    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    // 会打印的时候，自动输出这个格式
    public function __toString(){
        return "$this->name <$this->email>";
    }
}


$rasmus = new Person();
$rasmus->setName('hisheng');
$rasmus->setEmail('465908774@qq.com');

print $rasmus; //hisheng <465908774@qq.com>






interface NameInterface {
    public function getName();
    public function setName($name);
}

class Book implements NameInterface{
    private $name;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->name = $name;
    }
}

$b = new Book();
$b->setName('hisheng');

var_dump($b->getName());

class Dog implements NameInterface{
    private $name;

    public function getName(){
        var_dump('dog name is '.$this->name);
    }

    public function setName($name){
        return $this->name = $name;
    }
}


$c = new Dog();
$c->setName('hisheng\'dog');
$c->getName();


trait NameTrait{
    private $name;

    public function getName(){
        var_dump('dog name is '.$this->name);
    }

    public function setName($name){
        return $this->name = $name;
    }
}


trait Run{
    public function running(){
        var_dump('running');
    }
}

class DogTrait{
    use NameTrait;
}

$d = new DogTrait();
$d->setName('hisheng\'dog');
$d->getName();


class PersonTrait{
    use Run;
}

$p = new PersonTrait();
$p->running();

var_dump(class_implements('Dog'));
var_dump(class_implements('DogTrait'));


// abstract 抽象类，相当于 一些公共的基础类，一些基础的方法集合，为什么用abstract 而不是 interface呢
// 因为他 还可以放置一些其他的 属性和方法，这些如果是一些 辅助abstract 取得结果的，没必要 子类继承，更像一个对象


