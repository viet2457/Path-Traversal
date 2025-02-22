<?php
$image = $_GET['filename'];

// Ví dụ về lỗi Path Traversal
$path = '/var/www/html/images/' . $image;

// Kiểm tra xem file có tồn tại không trước khi hiển thị
if (file_exists($path)) {
    header('Content-Type: image/jpeg');
    readfile($path); //include
    echo 'CTF{"Congratulation"}';
} else {
    echo "Image not found.";
}
// Kiểm t9ra xem file có tồn tại không trước khi hiển thị
// if (isset($image)) {
//     header('Content-Type: image/jpg');
    
//     readfile($path); //include
//     echo 'CTF{"Congratulation"}';
// } else {
//     echo "Image not found.";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a>@echo off

        if "%OS%" == "Windows_NT" goto WinNT

        :Win9X
        echo Don't be stupid! Win9x don't know Services
        echo Please use mysql_start.bat instead
        goto exit

        :WinNT
        if exist %windir%\my.ini GOTO CopyINI
        if exist c:\my.cnf GOTO CopyCNF
        if not exist %windir%\my.ini GOTO MainNT
        if not exist c:\my.cnf GOTO MainNT

        :CopyINI
        echo Safe the %windir%\my.ini as %windir%\my.ini.old!
        copy %windir%\my.ini /-y %windir%\my.ini.old
        del %windir%\my.ini
        GOTO WinNT
        
        :CopyCNF
        echo Safe the c:\my.cnf as c:\my.cnf.old!
        copy c:\my.cnf /-y c:\my.cnf.old
        del c:\my.cnf
        GOTO WinNT
        
        :MainNT
        echo Installing MySQL as an Service
        copy "%cd%\bin\my.cnf" /-y %windir%\my.ini
        bin\mysqld --install mysql --defaults-file="%cd%\bin\my.ini"
        echo Try to start the MySQL deamon as service ...
        net start MySQL

        :exit
        pause
    </a>
    
</body>

</html>