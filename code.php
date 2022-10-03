<?php
$con = mysqli_connect('localhost','root','','db_students');

if(isset($_POST['save_student'])){


    $name = mysqli_real_escape_string($con,$_POST['name']);
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $dep = mysqli_real_escape_string($con,$_POST['dep']);
    // $name = "Name";
    // $fname = "fname";
    // $dep = "Dep";
    


    $query = "INSERT INTO students(name,fname,dep) value('$name', '$fname', '$dep')";

    $query_run = mysqli_query($con,$query);

    if($query_run){
        $res = [
            "status"=>200,
            "message"=>"Student Created Successfully",
        ];
        echo json_encode($res);
        return;
    }



}




?>