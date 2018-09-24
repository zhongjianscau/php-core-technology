<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2018-09-24 19:48:59
// +----------------------------------------------------------------------
class Person
{
    public $name;
    public $gender;
    public function say()
    {
        echo $this->name,'is ',$this->gender;
        echo "<br/>";
    }
}

$student = new Person();
$student->name = 'Tom';
$student->gender = 'male';
$student->say();
$teacher = new Person();
$teacher->name = 'Kate';
$teacher->gender = 'female';
$teacher->say();
//print_r($student);
//var_dump($student);
$str = serialize($student);
echo $str,"<br/>";
$file = 'store.txt';
if (!file_exists($file)) {
    touch($file);
}
//对象序列化后写进文件里
file_put_contents($file, $str);
//从文件中读取对象信息
$str = file_get_contents($file);
$student = unserialize($str);
$student->say();

