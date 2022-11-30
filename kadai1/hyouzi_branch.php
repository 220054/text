<?php

if(isset($_POST['disp'])==true) {
    if(isset($_POST['hyouziid'])==false) {
        header('Location:hyouzi_ng.php');
        exit();
    }
    $hyouzi_id=$_POST['hyouziid'];
    header('Location: hyouzi_disp.php?hyouziid='.$hyouzi_id);
    exit();
}

if(isset($_POST['add'])==true) {
    header('Location:hyouzi_add.php');
    exit();
}

if(isset($_POST['edit'])==true) {
    if(isset($_POST['hyouziid'])==false) {
        header('Location:hyouzi_ng.php');
        exit();
    }
    $hyouzi_id=$_POST['hyouziid'];
    header('Location: hyouzi_edit.php?hyouziid='.$hyouzi_id);
    exit();
}

if(isset($_POST['delete'])==true) {
    if(isset($_POST['hyouziid'])==false) {
        header('Location:hyouzi_ng.php');
        exit();
    }
    $hyouzi_id=$_POST['hyouziid'];
    header('Location: hyouzi_delete.php?hyouziid='.$hyouzi_id);
    exit();
}

?>