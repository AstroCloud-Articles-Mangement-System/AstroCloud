<?php
require('Core/validation.php');

$user = new User;
$errors;
$_SESSION['success_message'] = "";
$_SESSION['error_message'] = "";

if (isset($_POST['_method']) && $_POST['_method'] === 'PATCH') {
    $user_id = intval($_POST['user_id']);
    $errors = validate_user();
if ($errors == "") {
    $page = "users";
    $data = [
      $_POST['name'],
      $_POST['email'],
      $_POST['phone'],
      $_POST['user_name'],
      password_hash($_POST['user_password'], PASSWORD_DEFAULT),
      $_POST['group']
    ];
    $user->update_user($user_id, $data);
    $allUsers = $user->get_all_users();
    $_SESSION['success_message'] = "User " . $_POST['name'] . " Updated Successfully!!";
}else{
    $page = "user_edit";
    $user = $user->get_user_by_id($user_id);
    $group = new Group();
    $allGroups = $group->get_all_groups();
    $_SESSION['error_message'] = $errors;
    }
}
require 'views/index.php';
