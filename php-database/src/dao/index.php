<?php

    require_once('config.php');

    // $user = new Users();
    // $user->findById(1);
    // echo $user;

    // $user = Users::findAll();
    // echo json_encode($user);

    // $user = Users::search('Thor');
    // echo json_encode($user);

    // $user = new Users();
    // $user->login('thor', '654321');
    // echo $user;

    // $user = new Users('TestContruct', '123');
    // $user->insert();
    // echo $user;

    // $user = new Users();
    // $user->findById(12);
    // $user->update('Frajola21', '123456');
    // echo $user;

    $user = new Users();
    $user->findById(2);
    $user->delete();
    echo $user;
