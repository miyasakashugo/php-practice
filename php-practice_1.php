<?php
// Q1 変数と文字列

$name = '宮坂周吾';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算

$num = 5 * 4;
echo $num;
echo "\n";
echo $num % 2;

// Q3 日付操作

$now = date("Y年m月d日 H時i分s秒");
echo '現在時刻は、' . $now . 'です。';

// Q4 条件分岐-1 if文

$device = 'windows';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません';
}

// Q5 条件分岐-2 三項演算子

$age = 21;
$message = ($age > 18) ? '成年です。' : '未成人です。';

echo $message;

// Q6 配列 　　　

$prefectures = ['東京', '神奈川', '埼玉', '群馬', '栃木', '茨城', '千葉'];

echo $prefectures[2] . 'と' . $prefectures[3] . "は関東地方の都道府県です \n";


// Q7 連想配列-1

$kanto = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮氏',
    '群馬県' => '前橋氏',
    '茨城県' => '水戸市'
];

foreach ($kanto as $ken) {
    echo $ken . "\n";
}

// Q8 連想配列-2

foreach ($kanto as $prefecture => $city) {
    if ($prefecture === '埼玉県')
    echo $prefecture . 'の県庁所在地は、' . $kanto[$prefecture] . 'です。';
}

// Q9 連想配列-3

$kanto = [
    '大阪府' => '大阪市',
    '京都府' => '京都市',
];

foreach ($kanto as $pref => $capital) {

    if ($pref === '大阪府' || $pref === '京都府') {
        echo $pref . 'は関東地方ではありません。' . "\n";

    } else {
        echo $pref . 'の県庁所在地は、' . $capital . 'です。' . "\n";
    }
}

// Q10 関数-1

function hello($name) {
    return $name . 'さん、こんにちは。';
}

echo hello('金谷');
echo "\n";
echo hello('安藤');

// Q11 関数-2

function calcTaxlnPrice($price) {
    $taxInPrice = $price * 1.1;
    return $taxInPrice;
}

$price = 1000;
$taxInPrice = calcTaxlnPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文

if ($number % 2 !== 0) {
    return $number . 'は奇数です。';
} else {
    return $number . 'は偶数です。';
}


echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';

        case 'C':
            return '合格ですが追加課題があります。';

        case 'D':
            return '不合格です。';

        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

echo "\n";
echo evaluateGrade('A');
echo "\n";
echo evaluateGrade('Z');

?>