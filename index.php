<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập PHP</title>
</head>
<body>
<?php
// 1. Đếm số ký tự
$b1 = "Hello World";
echo strlen($b1) . "<br>";

// 2. Đếm số từ
$b2 = "Nguyễn Việt Dũng";
echo str_word_count($b2) . "<br>";

// 3. Đảo ngược chuỗi
$b3 = "Hello Deha";
echo strrev($b3) . "<br>";

// 4. Tìm vị trí chuỗi con
$b4 = "Toi la sinh vien truong DH TMU";
echo strpos($b4, "DH") . "<br>";

// 5. Thay thế chuỗi con
echo str_replace("DH", "Dai Hoc", $b4) . "<br>";

// 6. Kiểm tra chuỗi bắt đầu bằng chuỗi khác
$b6 = "Xin chao TMU";
echo strncmp($b6, "Xin", 3) . "<br>";

// 7. Chuyển chuỗi thành chữ thường
$b7 = "HELLO DEHA";
echo strtolower($b7) . "<br>";

// 8. Viết hoa chữ cái đầu mỗi từ
$b8 = "hello deha viet nam";
echo ucwords($b8) . "<br>";

// 9. Viết hoa chữ cái đầu tiên
$b9 = "hello deha";
echo ucfirst($b9) . "<br>";

// 10. Bỏ khoảng trắng ở đầu/cuối
$b10 = "   Hello Deha   ";
echo trim($b10) . "<br>";

// 11. Bỏ ký tự ở đầu
$b11 = "   Hello";
echo ltrim($b11) . "<br>";

// 12. Bỏ ký tự ở cuối
$b12 = "Hello   ";
echo rtrim($b12) . "<br>";

// 13. Tách chuỗi thành mảng
$b13 = "a,b,c,d";
print_r(explode(",", $b13));
echo "<br>";

// 14. Nối mảng thành chuỗi
$arr = ["a","b","c","d"];
echo implode("-", $arr) . "<br>";

// 15. Đệm chuỗi bên trái
$b15 = "123";
echo str_pad($b15, 6, "0", STR_PAD_LEFT) . "<br>";

// 16. Tìm lần xuất hiện cuối cùng ký tự
$b16 = "banana";
echo strrchr($b16, "a") . "<br>";

// 17. Kiểm tra chuỗi có chứa chuỗi con
$b17 = "Xin chào Deha";
echo (strstr($b17, "Deha") ? "Có" : "Không") . "<br>";

// 18. Thay thế ký tự không phải chữ/số
$b18 = "Xin chào! PHP #2025 ^^";
echo preg_replace('/[^a-zA-Z0-9]+/', "_", $b18) . "<br>";

// 19. Kiểm tra số nguyên
$b19 = 123;
echo (is_int($b19) ? "Là số nguyên" : "Không") . "<br>";

// 20. Kiểm tra email hợp lệ
$b20 = "abc@example.com";
echo (filter_var($b20, FILTER_VALIDATE_EMAIL) ? "Email hợp lệ" : "Email sai") . "<br>";
?>
</body>
</html>
