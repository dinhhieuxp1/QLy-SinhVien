
<?php
echo "Chọn 1: Để nhập danh sách sinh viên."."\n";
echo "Chọn 2: Để hiển thị danh sách sinh viên."."\n";
echo "Chọn 3: Để tìm kiếm sinh viên theo tên."."\n";
echo "chọn 4: Để UPDATE"."\n";
echo "chọn 5: EXIT"."\n";
function inputInfor()
{
    $file = file_get_contents(test . json, 'w');
    $data = json_decode($file, true);
    do {
        $name = (string)Readline("Mời bạn nhập tên:");
    } while ($name == null);
    do {
        $age = (int)ReadLine("Mời bạn nhập tuổi:");
    } while ($age <= 0 && $age == null);
    do {
        $class = (string)ReadLine("Mời bạn nhập lớp:");
    } while ($class == null);
    $data[] = [
        $name = 'Name',
        $age = 'Age',
        $class = 'Class'
    ];

}


?>