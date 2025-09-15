<!-- Nguyễn Việt Dũng - K59SN1 - 23D192007 -->
<!-- Câu 8: Viết function giải phương trình bậc 2 -->
<?php
function giaiPTBac2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            return $c == 0 ? "Phương trình vô số nghiệm" : "Phương trình vô nghiệm";
        } else {
            return "Phương trình có 1 nghiệm: x = " . (-$c / $b);
        }
    }

    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x = $x";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}
echo giaiPTBac2(1, -3, 2);
?>
<br>
<!-- Câu 9: In ra màn hình hình chữ nhật rỗng 5x7 bằng dấu * (dùng vòng lặp) -->
<?php
function inHCNRong($dai, $rong) {
    for ($i = 1; $i <= $dai; $i++) {
        for ($j = 1; $j <= $rong; $j++) {
            if ($i == 1 || $i == $dai || $j == 1 || $j == $rong) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}
inHCNRong(5, 7);
?>
<br>
<!-- Câu 10: Viết function tính trung bình cộng của mảng -->
 <?php
function tinhTBC($arr) {
    if (count($arr) == 0) return 0;
    $tong = array_sum($arr);
    return $tong / count($arr);
}

$mang = [2, 4, 6, 8, 10];
echo "Trung bình cộng = " . tinhTBC($mang);
?>
