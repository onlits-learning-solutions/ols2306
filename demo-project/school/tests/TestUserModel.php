<?php

use school\src\user\user;

require '../src/user/UserModel.php';

function test_authentitcate()
{
    $user = new user();

    //Test case1
    $test = array("user_id"=>"root", "Password"=>"root");
    if($user->authenticate($test) == 1)
        echo "Test2 Successful!\n";
    else
        echo "Test2 Failed\n";

    

    //Test case2
    $test = array("user_id"=>"admin", "Password"=>"admin");
    if($user->authenticate($test) == 0)
        echo "Test2 Successful!\n";
    else
        echo "Test2 Failed\n";

}

test_authentitcate();