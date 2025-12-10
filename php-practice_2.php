<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
  if ($i % 20 === 0) {
    echo "tic-tac" . "\n";
  } elseif ($i % 4 === 0) {
    echo "tic" . "\n";
  } elseif ($i % 5 === 0) {
      echo "tac" . "\n";
    }else {
      echo $i . "\n";
  }
}

// Q2 多次元連想配列

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222',
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444',
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666',
    ],
];
echo $personalInfos[1]['name'] . 'さんの電話番号は' . $personalInfos[1]['tel'] . 'です。';

  foreach ($personalInfos as $index => $info) {
    $number = $index + 1;
    echo $number . '番目の' . $info['name'] . 'のメールアドレスは'
       . $info['mail'] . 'で、電話番号は'
       . $info['tel'] . "です。 \n";
      }

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
  $personalInfos[$index]['age'] = $ageList[$index];
}

// Q3 オブジェクト-1

class Student
{
    public $studentId;  //プロパティ
    public $studentName;

    public function __construct($id, $name)  //メゾット
    {
        $this->studentId = $id; //生徒専用のプロパティ
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
} //ここまでがクラス

$yamada = new Student(120, '山田');  //インスタンス化
echo '学籍番号' . $yamada->studentId . '番の生徒は'
   . $yamada->studentName . 'です。';


// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject
           . 'の授業に参加しました。学籍番号：'
           . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス

$today = new DateTime();
$today->modify('-1 month');
echo $today->format('Y-m-d');

$today = new DateTime();
$oldDay = new DateTime('1992-04-25');

$diff = $today->diff($oldDay);

$days = $diff->days;
echo 'あの日から' . $days . '日経過しました。';


?>