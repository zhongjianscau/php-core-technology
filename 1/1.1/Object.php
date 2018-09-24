<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Time: 2018-09-24 20:08:10
// +----------------------------------------------------------------------
class Person
{
    public $name;
    public $gender;
    public function say()
    {
        echo $this->name,'is ',$this->gender;
    }
}

class Family
{
    public $people;
    public $location;
    public function __construct($p, $loc)
    {
        $this->people = $p;
        $this->location = $loc;
    }
}

$student = new Person();
$student->name = 'Tom';
$student->gender = 'male';
$student->say();
$tom = new Family($student, 'peking');
echo serialize($student);
$student_arr = ['name' => 'Tom', 'gender' => 'male'];
echo "<br/>";
echo serialize($student_arr);
print_r($tom);
echo "<br/>";
echo serialize($tom);
