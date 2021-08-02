<?php

system('termux-wake-lock');
system('clear');

error_reporting(0);
session_start();

echo "Bạn Muốn Install Packages Thiết Yếu Không ? [y/n] -> ";
$packages=trim(fgets(STDIN));
if($packages=='y'){
   system('apt-get update > /dev/null');
   system('apt-get install sl -y > /dev/null');
   echo "Đã Install Xong\n";
}

system('sl');
system('clear');

// Color
$res="\033[0m"; $BBlack="\033[1;30m"; $BRed="\033[1;31m"; $BGreen="\033[1;32m";
$BYellow="\033[1;33m"; $BBlue="\033[1;34m"; $BPurple="\033[1;35m"; $BCyan="\033[1;36m";
$BWhite="\033[1;37m"; $Blue="\033[0;34m"; $lime="\033[1;32m"; $red="\033[1;31m";
$xanh="\033[1;32m"; $cyan="\033[1;36m"; $yellow="\033[1;33m"; $turquoise="\033[1;34m";
$maugi="\033[1;35m"; $white= "\033[1;37m"; $red="\033[1;31m"; $white= "\033[1;37m";
$whiteb= "\033[1;37m"; $redb="\033[1;31m"; $green="\033[1;32m"; $yellow="\033[1;33m";
$cam="\033[1;33m"; $test="\033[1;33m"; $greenb="\033[1;32m"; $blue="\033[1;34m";
$lam="\033[1;34m"; $tmi="\033[1;34m"; $hong="\033[1;35m"; $imt="\033[1;35m";
$cyan= "\e[1;36m"; $syan="\033[1;36m"; $xnhac= "\033[1;96m"; $den="\033[1;90m";
$do="\033[1;91m"; $luc="\033[1;92m"; $vang="\033[1;93m"; $xduong="\033[1;94m";
$hong="\033[1;95m"; $trang="\033[1;97m"; $vang="\033[1;93m"; $do="\033[1;91m";
$BBlack="\033[1;30m"; $BRed="\033[1;31m"; $BGreen="\033[1;32m"; $BYellow="\033[1;33m";
$BBlue="\033[1;34m"; $BPurple="\033[1;35m"; $BCyan="\033[1;36m"; $BWhite="\033[1;37m";
$Blue="\033[0;34m"; $lime="\033[1;32m"; $red="\033[1;31m"; $xanh="\033[1;32m";
$cyan="\033[1;36m"; $yellow="\033[1;33m"; $turquoise="\033[1;34m"; $maugi="\033[1;35m";
$white= "\033[1;37m"; $BCyan="\033[1;36m"; $trang="\033[1;37m"; $do="\033[1;31m";
$luc="\033[1;32m"; $vang="\033[1;33m"; $luc="\033[1;92m"; $xanhtrang="\033[1;42;37]";

$banner="\033[1;32m
|    ██████╗ ██████╗ ██████╗ ███████╗    ███████╗  |
|   ██╔════╝██╔═══██╗██╔══██╗██╔════╝    ██╔════╝  |
|   ██║     ██║   ██║██████╔╝█████╗█████╗█████╗    |
|   ██║     ██║   ██║██╔══██╗██╔══╝╚════╝██╔══╝    |
|   ╚██████╗╚██████╔╝██║  ██║███████╗    ██║       |
|    ╚═════╝ ╚═════╝ ╚═╝  ╚═╝╚══════╝    ╚═╝       |
";
for ($v = 0;$v <= 12;$v++) {
    echo $xanh . "| ";
    usleep(10000);
    echo $xanh . "| ";
    usleep(10000);
}
echo "\n";
for ($v = 0;$v <= 12;$v++) {
    echo $xanh . "- ";
    usleep(10000);
    echo $xanh . "- ";
    usleep(10000);
}

echo $banner;

for ($v = 0;$v <= 12;$v++) {
    echo $xanh . "- ";
    usleep(10000);
    echo $xanh . "- ";
    usleep(10000);
}
echo "\n";
for ($v = 0;$v <= 12;$v++) {
    echo $xanh . "| ";
    usleep(10000);
    echo $xanh . "| ";
    usleep(10000);
}
echo "\n";
echo "\n";
echo $xanh . "8Bit ASCII Text\n";
echo "Momo: 0325555077\n";
echo "Zalo: 0325555077\n";
echo "Facebook: https://facebook.com/KernelPanix\n";
echo "Telegram: https://t.me/KernelPanix\n";

$menu="2) Chạy Auto Chọc Bạn Bè Facebook
3) Chạy Auto Spam CMT 1 ID
4) Chạy Auto Spam CMT Đa Luồng
5) Chạy Auto Check In4 Fecebook
6) Chạy Auto Share Bài Viết
7) Chạy Auto Get 2 Fa Fecebook
8) Chạy Auto Qlizz Tăng Follow
9) Lấy Key HMA
";

$h1="
\033[0;31m┌─[\033[1;36mKernelPanix\033[0;33m@\033[1;34mCore-F\033[0;31m]─[\033[1;30m~\033[0;31m]
└──╼ $ \033[1;37m";

for($i=1;$i<=$i+1;$i++){
    echo $h1;
    $in1=trim(fgets(STDIN));
	switch ($in1) {
		case "help":
			echo "à thì ra mày cần trợ giúp\n";
			echo $menu;
    			break;
  		case "2":
			echo "à thì ra mày thích chọc người khác\n";
    			eval(file_get_contents('https://raw.githubusercontent.com/KernelPanic-OpenSource/Core-F/master/include/code8'));
    			break;
  		case "exit":
			echo "à thì ra mày chọn cái chết\n";
    			echo "Shutdown\n";
			exit();
    			break;
  		default:
    			echo "Lệnh không tồn tại hoặc, Bạn chưa nhập lệnh, Nhập \033[0;31m'help' \033[1;37mđể biết thêm thông tin.";
	}
}

# eval(file_get_contents(link));

# @system('xdg-open https://fb');
