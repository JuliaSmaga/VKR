<?php

$inputParams = parseInputParams($argv);
$inputParamsTask = array_key_exists('task', $inputParams) ? $inputParams['task'] : 0;
$inputParamsModule = array_key_exists('module', $inputParams) ? $inputParams['module'] : 0;
$inputParamsMode = array_key_exists('mode', $inputParams) ? $inputParams['mode'] : 0;
$Path_File = "/home/astraroot/Desktop/results.txt";

switch ($inputParamsMode){
    case 1:{
        echo "Выбран режим - Обучение\n";
        switch($inputParamsModule){
        case 1:{
            switch ($inputParamsTask){
        case 1.1:{
            echo "Модуль 1 - Управление пользователями и группами\n";
            task1_1();
            break;
        }
        case 1.2:{
            echo "Модуль 1 - Управление пользователями и группами\n";
            task1_2();
            break;
        }
        case 1.3:{
            echo "Модуль 1 - Управление пользователями и группами\n";
            task1_3();
            break;
        }
        case 1.4:{
            echo "Модуль 1 - Управление пользователями и группами\n";
            task1_4();
            break;
        }
        default:{
            echo "Модуль 1 - Управление пользователями и группами\n";
            task1_1();
            task1_2();
            task1_3();
            task1_4();
            break;
        }
    }
    }
            break;
        case 2:{
            switch ($inputParamsTask){
        case 2.1:{
            echo "Модуль 2 - Настройка прав и разрешений\n";
            task2_1();
            break;
        }
        case 2.2:{
            echo "Модуль 2 - Настройка прав и разрешений\n";
            task2_2();
            break;
        }
        case 2.3:{
            echo "Модуль 2 - Настройка прав и разрешений\n";
            task2_3();
            break;
        }
        case 2.4:{
            echo "Модуль 2 - Настройка прав и разрешений\n";
            task2_4();
            break;
        }
        case 2.5:{
            echo "Модуль 2 - Настройка прав и разрешений\n";
            task2_5();
            break;
        }
        default:{
            echo "Модуль 2 - Настройка прав и разрешений\n";
            task2_1();
            task2_2();
            task2_3();
            task2_4();
            task2_5();
            break;
        }
    }
    }
            break;
        case 3:{
            switch ($inputParamsTask){
        case 3.1:{
            echo "Модуль 3 - Управление паролями\n";
            task3_1();
            break;
        }
        case 3.2:{
            echo "Модуль 3 - Управление паролями\n";
            task3_2();
            break;
        }
        case 3.3:{
            echo "Модуль 3 - Управление паролями\n";
            task3_3();
            break;
        }
        default:{
            echo "Модуль 3 - Управление паролями\n";
            task3_1();
            task3_2();
            task3_3();
            break;
        }
    }
    }
            break;
        case 4:{
            switch ($inputParamsTask){
        case 4.1:{
            echo "Модуль 4 - Настройка контроллера домена ALD\n";
            task4_1();
            break;
        }
        case 4.2:{
            echo "Модуль 4 - Настройка контроллера домена ALD\n";
            task4_2();
            break;
        }
        default:{
            echo "Модуль 4 - Настройка контроллера домена ALD\n";
            task4_1();
            task4_2();
            break;
        }
    }
    }
            break;
        case 5:{
            switch ($inputParamsTask){
        case 5.1:{
            echo "Модуль 5 - Настройка репозиториев apt\n";
            task5_1();
            break;
        }
        case 5.2:{
            echo "Модуль 5 - Настройка репозиториев apt\n";
            task5_2();
            break;
        }
        default:{
            echo "Модуль 5 - Настройка репозиториев apt\n";
            task5_1();
            task5_2();
            break;
        }
    }
    }
            break;
        case 6:{
            switch ($inputParamsTask){
        case 6.1:{
            echo "Модуль 6 - Настройка переменных окружения\n";
            task6_1();
            break;
        }
        default:{
            echo "Модуль 6 - Настройка переменных окружения\n";
            task6_1();
            break;
        }
    }
    }
            break;
        case 7:{
            switch ($inputParamsTask){
        case 7.1:{
            echo "Модуль 7 - Монтирование съемных машинных носителей информации\n";
            task7_1();
            break;
        }
        default:{
            echo "Модуль 7 - Монтирование съемных машинных носителей информации\n";
            task7_1();
            break;
        }
    }
    }
            break;
        case 8:{
            switch ($inputParamsTask){
        case 8.1:{
            echo "Модуль 8 - Установка обновлений\n";
            task8_1();
            break;
        }
        default:{
            echo "Модуль 8 - Установка обновлений\n";
            task8_1();
            break;
        }
    }
    }
            break;
        default:
            echo "Для осуществления проверки заданий в режиме обучения необходимо выбрать модуль или конкретное задание\n";
            break;
            }
        }
        break;
    case 2: {
        echo "Выбран режим - Экзамен\n";
        if (!file_exists($Path_File)){
            touch ($Path_File);
            }
        if (filesize($Path_File) != 0){
            echo "Повторная попытка прохождения экзамена невозможна. Результаты экзамена записаны в файл results\n";
            exit;
        }else{
            ob_start ();
            echo "Модуль 1 - Управление пользователями и группами\n";
            task1_1();
            task1_2();
            task1_3();
            task1_4();
            echo "Модуль 2 - Настройка прав и разрешений\n";
            task2_1();
            task2_2();
            task2_3();
            task2_4();
            task2_5();
            echo "Модуль 3 - Управление паролями\n";
            task3_1();
            task3_2();
            task3_3();
            echo "Модуль 4 - Настройка контроллера домена ALD\n";
            task4_1();
            task4_2();
            echo "Модуль 5 - Настройка репозиториев apt\n";
            task5_1();
            task5_2();
            echo "Модуль 6 - Настройка переменных окружения\n";
            task6_1();
            echo "Модуль 7 - Монтирование съемных машинных носителей информации\n";
            task7_1();
            echo "Модуль 8 - Установка обновлений\n";
            task8_1();
            $output = ob_get_clean();
            file_put_contents ($Path_File, $output);
            echo "Результаты экзамена записаны в файл results\n";
        }
    }
    break;
default:
    echo "Для выполнения проверки необходимо выбрать режим проверки\n";
}

function task1_1 () {
        $existence = file_get_contents('/etc/passwd');
        preg_match ('#.*student1.*#', $existence, $existence_user);
        if (!$existence_user){
           echo "Ошибка в задании №1.1. Пользователя student1 не существует\n";
           return;
        }
        $users = exec ('groups student1');
        preg_match ('#student1.*astra-admin.*#', $users, $users_admin);
        if (!$users_admin) {
            echo "Ошибка в задании №1.1. Пользователь не добавлен в группу администраторов\n";
            return;
        }
        $level = exec ('pdpl-user student1');
        preg_match ('#.*0:63.*#', $level, $mandate_level);
        if (!$mandate_level){
            echo "Ошибка в задании №1.1. Мандатный уровень целостности пользователя не соответствует администратору\n";
            return;
            }
        echo "Задание №1.1 выполнено\n";
}

function task1_2 (){
    $blocking = file_get_contents ('/etc/shadow');
    preg_match ('#.*student2:!.*#', $blocking, $blocking_user);
    if ($blocking_user){
        echo "Ошибка в задании №1.2. Пользователь student2 заблокирован\n";
        return;
    }
    echo "Задание №1.2 выполнено\n";
}

function task1_3 (){
    $group = file_get_contents ('/etc/group');
    preg_match ('#students#', $group, $existence_group);
    if (!$existence_group){
        echo "Ошибка в задании №1.3. Группа students не создана\n";
        return;
    }
    echo "Задание №1.3 выполнено\n";
}

function task1_4 (){
    $member = file_get_contents ('/etc/group');
    preg_match ('#students.*student1.*#',$member, $member_group1);
    if (!$member_group1){
        echo "Ошибка в задании №1.4. Пользователь student1 не добавлен в группу students\n";
        return;
    }
    preg_match ('#students.*student2.*#', $member, $member_group2);
    if (!$member_group2){
        echo "Ошибка в задании №1.4. Пользователь student2 не добавлен в группу students\n";
        return;
    }
    echo "Задание №1.4 выполнено\n";
}

function task2_1 (){
     $directory = shell_exec ('ls /home/astraroot/Desktop');
     preg_match ('#.*Prog.*#', $directory, $directory_code);
     if (!$directory_code) {
        echo "Ошибка в задании №2.1. На рабочем столе отсутствует каталог Prog\n";
        return;
    }
    echo "Задание №2.1 выполнено\n";
}
function task2_2(){
    $owner = shell_exec ('sudo getfacl -p /home/astraroot/Desktop/Prog');
    preg_match ('#.*owner: root.*#', $owner, $owner_user);
    preg_match ('#.*group: root.*#', $owner, $owner_group);
    if (!$owner_user && !$owner_group){
        echo "Ошибка в задании №2.2. Пользователь root или группа root не является владельцем каталога Prog\n";
        return;
    }
    echo "Задание №2.2 выполнено\n";
}
function task2_3(){
    $rights = shell_exec ('sudo getfacl -p /home/astraroot/Desktop/Prog');
    preg_match ('#user:root:.*r.*#', $rights,$rights_r3);
    if (!$rights_r3){
        echo "Ошибка в задании №2.3. Пользователь root не имеет права на чтение каталога Prog\n";
        return;
    }
    preg_match ('#user:student1:.*r.*#', $rights, $rights_r4);
    if (!$rights_r4){
        echo "Ошибка в задании №2.3. Пользователь student1 не имеет права на чтение каталога Prog\n";
        return;
    }
    preg_match ('#user:student2:.*r.*#', $rights, $rights_r5);
    if (!$rights_r5){
        echo "Ошибка в задании №2.3. Пользователь student2 не имеет права на чтение каталога Prog\n";
        return;
    }
    preg_match ('#.*other::---.*#', $rights, $rights_r6);
    if(!$rights_r6){
        echo "Ошибка в задании №2.3. Остальные пользователи не должны иметь доступ к каталогу Prog\n";
        return;
    }
    echo "Задание №2.3 выполнено\n";
}
function task2_4(){
    $rights = shell_exec ('sudo getfacl -p /home/astraroot/Desktop/Prog');
    preg_match ('#user:student1:.*x.*#', $rights, $rights_r7);
    if (!$rights_r7){
        echo "Ошибка в задании №2.4. Пользователь student1 не имеет права на исполнение в каталоге Prog\n";
        return;
    }
    preg_match ('#user:student2:.*x.*#', $rights, $rights_r8);
    if (!$rights_r8){
        echo "Ошибка в задании №2.4. Пользователь student2 не имеет права на исполнение в каталоге Prog\n";
        return;
    }
    echo "Задание №2.4 выполнено\n";
}
function task2_5(){
    $rights = shell_exec ('sudo getfacl -p /home/astraroot/Desktop/Prog');
    preg_match ('#user:student1:.*w.*#', $rights, $rights_r9);
    if (!$rights_r9){
        echo "Ошибка в задании №2.5. Пользователь student1 не имеет права на запись в каталоге Prog\n";
        return;
    }
    preg_match ('#user:student2:.*w.*#', $rights, $rights_r10);
    if (!$rights_r10){
        echo "Ошибка в задании №2.5. Пользователь student2 не имеет права на запись в каталоге Prog\n";
        return;
    }
    echo "Задание №2.5 выполнено\n";
}


function task3_1(){
    $passwd_user = shell_exec ('chage -l student2');
    preg_match ('#Минимальное количество дней между сменой пароля.*15.*#', $passwd_user, $validity_passwd1);
    preg_match ('#Максимальное количество дней между сменой пароля.*30.*#', $passwd_user, $validity_passwd2);
    preg_match ('#Количество дней с предупреждением перед деактивацией пароля.*7.*#', $passwd_user, $validity_passwd3);
    if ($validity_passwd1 && $validity_passwd2 && $validity_passwd3){
        echo "Задание №3.1 выполнено\n";
        return;
    }
    echo "Ошибка в задании №3.1. Срок действия пароля пользователя student2 не соответствует заданию\n";
}


function task3_2(){
    $lock_options = file_get_contents ('/etc/pam.d/common-auth');
    preg_match ('#pam_tally.so.*deny=5 lock_time=90.*#', $lock_options, $user_lock);
    if (!$user_lock){
        echo "Ошибка в задании №3.2. Политика блокировки учетной записи не соответствует заданию\n";
        return;
    }
    echo "Задание №3.2 выполнено\n";
}


function task3_3(){
    $passwd = file_get_contents ('/etc/pam.d/common-password');
    preg_match ('#.*minlen=8 lcredit=-1 ucredit=-1 dcredit=-3 ocredit=-1.*#', $passwd, $correct_passwd);
    if (!$correct_passwd) {
            echo "Ошибка в задании №3.3. Сложность паролей не соответствует заданию\n";
            return;
        }
    $validity = file_get_contents ('/etc/login.defs');
    preg_match ('#.*PASS_MAX_DAYS 60.*#', $validity, $regex1);
    preg_match ('#.*PASS_MIN_DAYS 30.*#',$validity, $regex2) ;
    preg_match ('#.*PASS_WARN_AGE 5.*#', $validity, $regex3);
    if ($regex1 && $regex2 && $regex3){
        echo "Задание №3.3 выполнено\n";
        return;
    }
    echo "Ошибка в задании №3.3. Срок действия паролей не соответствует заданию\n";
}

function task4_1(){
    $ip = shell_exec ('ip addr');
    preg_match ('#.*inet 192.168.10.1/24 brd 192.168.10.255.*#', $ip, $ip_server);
    if (!$ip_server){
        echo "Ошибка в задании №4.1. IP-адрес сервера не соответствует заданию\n";
        return;
    }
    $domain_name = shell_exec ('hostname');
    preg_match ('#.*astra.domain.local.*#', $domain_name, $domain_server);
    if (!$domain_server){
        echo "Ошибка в задании №4.1. Доменное имя сервера не соответствует заданию\n";
        return;
    }
    $host = file_get_contents ('/etc/hosts');
    preg_match ('#192.168.10.1.*astra.domain.local.*#', $host, $hosts);
    if (!$hosts){
        echo "Ошибка в задании №4.1. Файл /etc/hosts настроен неккоректно\n";
        return;
    }
    $domain = shell_exec ('sudo ald-client status');
    preg_match ('#.*Astra Linux Directory сконфигурирована.*#', $domain, $domain_ald1);
    preg_match ('#.*Сервер ALD активен.*#', $domain, $domain_ald2);
    if ($domain_ald1 && $domain_ald2){
        echo "Задание №4.1 выполнено\n";
        return;
    }
    echo "Ошибка в задании №4.1. Сервер контроллера домена ALD настроен неккоректно\n";
}

function task4_2(){
   $client = shell_exec ('ldapsearch -x -h astra.domain.local -b "dc=domain,dc=local" "(cn=as.domain.local)" dn');
    preg_match ("#.*dn: cn=as.domain.local,ou=hosts,dc=domain,dc=local.*#", $client, $client_ALD);
    if (!$client_ALD){
        echo "Ошибка в задании №4.2. Клиент с именем компьютера as.domain.local не подключен к контроллеру домена\n";
        return;
    }
    echo "Задание №4.2 выполнено\n";
}

function task5_1(){
    $repository_deb = file_get_contents ('/etc/apt/sources.list');
    preg_match ('#.*deb https.*#', $repository_deb, $repository_debian);
    if (!$repository_debian){
        echo "Ошибка в задании №5.1. В файле /etc/apt/sources.list отсутствует описание репозиториев deb\n";
        return;
    }
    $repository_beav = shell_exec ('which beav');
    preg_match ('#.*/usr/bin/beav.*#', $repository_beav, $beav_check);
    if ($beav_check){
        echo "Задание №5.1 выполнено\n";
        return;
    }
    echo "Ошибка в задании №5.1. Редактор бинарных файлов beav не установлен\n";
}

function task5_2(){
    $repository_putty = shell_exec ('which putty');
    preg_match ("#.*/usr/bin/putty.*#", $repository_putty, $putty_check);
    if (!$putty_check){
        echo "Ошибка в задании №5.2. Пакет putty не установлен\n";
        return;
    }
    echo "Задание №5.2 выполнено\n";
}

function task6_1(){
    $variable  = file_get_contents ('/etc/bash.bashrc');
    preg_match ("#.*export VARIABLE=/home/astraroot/Desktop/Prog.*#", $variable, $variable_prog);
    if (!$variable){
        echo "Ошибка в задании №6.1. Переменная окружения не создана\n";
        return;
    }
    echo "Задание №6.1 выполнено\n";
}

function task7_1(){
    $flash_drive = shell_exec ('sudo fdisk -l');
    preg_match ("#.*Disk model: USB Flash Drive.*#", $flash_drive, $usb_flash_drive);
    if (!$usb_flash_drive){
        echo "Ошибка в задании №7.1. USB-флеш-накопитель не найден\n";
        return;
    }
    $mount_dir = shell_exec ('sudo ls /media');
    preg_match ("#.*my_usb.*#", $mount_dir, $mount_dir_true);
    if (!$mount_dir_true){
        echo "Ошибка в задании №7.1. Папка монтирования /media/my_usb не создана\n";
        return;
    }
    $mount = shell_exec ('sudo mount');
    preg_match ("#.*/media/my_usb.*#", $mount, $mount_usb);
    $mount2 = shell_exec ('sudo ls /media/my_usb');
    preg_match ("#.*File.txt.*#", $mount2, $mount_usb2);
    if ($mount_usb && $mount_usb2){
        echo "Задание №7.1 выполнено\n";
        return;
    }
    echo "Ошибка в задании №7.1. USB-флеш-накопитель не смонтирован\n";
}

function task8_1(){
    $version = file_get_contents ('/etc/astra_version');
    preg_match ('#.*1.7.2.*#', $version, $astra_version);
    if ($astra_version){
        echo "Ошибка в задании №8.1. Обновление не установлено\n";
        return;
    }
    echo "Задание №8.1 выполнено\n";
}

function parseInputParams($argv): array {
    $copyArgv = $argv;
    unset($copyArgv[0]);

    $parsedParams = [];
    foreach($copyArgv as $arg){
        $arg = trim($arg, " \n\r\t\v\x00-");
        $explodedParam = explode('=', $arg); /*разделяет части модуля и номер модуля*/
        $parsedParams[$explodedParam[0]] = $explodedParam[1]; /*создает значение ключ значение*/
    }

    return $parsedParams;
}
