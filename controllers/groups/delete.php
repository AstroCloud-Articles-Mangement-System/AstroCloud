<?php
$group_id = intval($_GET['id']); // cast the id parameter to an integer
$_SESSION['error_message'] = "";
$group = new Group();
if (($group->check_id_existence($group_id)) && (!$group->Is_Admins_or_Editors_group($group_id))) {
    $groupType='ordinary';
    try {
        $group = $group->delete_group($group_id);
        $_SESSION['success_message'] = "";
        $_SESSION['success_message'] = "This group Removed Successfully!!";
    } catch (mysqli_sql_exception $exception ) {
        $_SESSION['error_message'] = "You Can't Delete this group, Delete Related Users First";
    }

} else {
    $_SESSION['error_message'] = "You can't Delete Admins & Editors Groups and The Groups that don't exist in db";
}
header("Location: " . $_SERVER['HTTP_REFERER']);