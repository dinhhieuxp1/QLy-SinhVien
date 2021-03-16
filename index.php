<?php
function menu()
{
    echo "Chọn 1: Để nhập danh sách sinh viên." . "\n";
    echo "Chọn 2: Để hiển thị danh sách sinh viên." . "\n";
    echo "Chọn 3: Để tìm kiếm sinh viên theo tên." . "\n";
    echo "chọn 4: Để UPDATE" . "\n";
    echo "chọn 5: EXIT" . "\n";
}
function khaibao(){
    $file=file_get_contents('data.json');
    $data = json_decode($file, true);
    do {
        $name = (string)readline("Nhập tên cho sinh viên : ");
    }while($name==null);
    echo "\n";
    do{
        $age = (int)readline("Nhâp tuổi ch sinh viên : ");
    }while($age<=0 && $age==null);
    echo "\n";
    do {
        $class = (string)readline("Nhập lớp cho sinh viên : ");
    }while($class==null);
    echo "\n";
    $data[] = [
        "Name"=> $name,
        "Age" => $age,
        "Class" =>$class
    ];
    var_dump($data);
    $myfile = fopen('data.json','w');// mở file
    fwrite($myfile,json_encode($data));
    fclose($myfile);
    chon();
}
function danhsach(){
    $content = file_get_contents('data.json');
    var_dump(json_decode($content));
    var_dump(json_decode($content,true));
    chon();
}
function timkiem(){
    $name = (String)readline("Nhập tên cho sinh viên : ");
    $content = file_get_contents('data.json');
    $objitems = json_decode($content,true);
    //var_dump(json_decode($content));
    foreach($objitems as $key=>$student){

//        die();
        if($name == $student['Name']) {
            echo 'Kết quả là';
            var_dump($student);
        }
//        }
        //  var_dump(json_decode($student));


    }


    chon();

}
function update(){
    $jsonString = file_get_contents('data.json');
    $data = json_decode($jsonString, true);//chyen doi du lieu
    $name=(String)readLine("Nhập tên người cần thay đổi: ");
    $data0['Name'] = (String)readLine("Nhập tên mới: ");
    $data0['Age']  = (int)readLine("Nhập tuổi mới: ");
    $data0['Class']= (String)readLine("Nhập lớp mới: ");//Update lai activity_name =Tennis//Update lai activity_name =Tennis
    foreach ($data as $key => $entry) {//vong lap ,lap lai gia tri $entry o vi tri key
        if ($entry['Name'] == $name) { // $key ==1 => FOOTBAllS==TENNIS
            $data[$key] = $data0;

        }
    }
    $newJsonString = json_encode($data);//ma hoa gia tri sang dinh dang json

    file_put_contents('data.json', $newJsonString); // dua tap tin vao
    chon();
}
function chon()
{   $i="";
    if($i==null){
        var_dump(menu());
    }
    $chon = (int)readline ('Mời bạn chọn :')."<br />";
    switch ($chon) {

        case 1:
            khaibao();
            break;
        case 2:
            danhsach();
            break;
        case 3:
            timkiem();
            break;
        case 4:
            update();
            break;
        case 5:
            die();
        default :
            echo "Sai cú pháp , Mời thử lại"."\n";
            chon();
    }
}
chon();