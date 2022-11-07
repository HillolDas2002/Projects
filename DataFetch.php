<?php
include 'Database.php';
function login($user){
    $con=$GLOBALS['con'];
    $n=$user['name'];
    $p=$user['password'];
    $ep=md5($p);
    $sql="select name, password from website where name=? and password=?";
    $st=$con->prepare($sql);
    $st->bind_param("ss",$n,$ep);
    if($st->execute()){
        $res=$st->get_result();
        if($res->num_rows>0){
            return true;
        }
    }
    else{
        echo $con->error;
    }
}

function addUser($user){
    $n=$user['name'];
    $e=$user['email'];
    $ps=$user['password'];
    $ep=md5($ps);
    $p=$user['phoneno'];
    $con=$GLOBALS['con'];
    $sql="insert into website values (null,?,?,?,?)";
    $st=$con->prepare($sql);
    $st->bind_param("ssss",$n,$e,$ep,$p);
      if($st->execute()){
            return true;
      }
      else{
          //return false;
          echo  $con->error;
      }
}


function getUsers(){
    $con=$GLOBALS['con'];
    $sql="select * from website";
    $result=$con->query($sql);
    $users=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $users[]=$row;
        }
    }
//    echo "<pre>";
//    print_r($users);
//    echo "</pre>";
    return  $users;
}

function getUser($id){
    $con=$GLOBALS['con'];
    $sql="select * from website where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute()){
        $result=$st->get_result();
        if($result->num_rows > 0){
            if($row=$result->fetch_assoc()){
                // echo "<pre>";
                // print_r($row);
                // echo "</pre>";
                return $row;
            }
        }
    }
    else{
        echo $con->error;
    }
}

// function deleteUser($id){
//     $con=$GLOBALS['con'];
//     $sql="delete from topstackusers where id=?";
//    $st=$con->prepare($sql);
//    $st->bind_param("i",$id);
//    if($st->execute()){
//        return true;
//    }
//    else{
//        echo $con->error;
//    }
// }

// function editUser($user){
//     $con=$GLOBALS['con'];
//     $name=$user['Name'];
//     $email=$user['Email'];
//     $id=$user['id'];
//     $sql="update topstackusers set name=?,email=? where id=?";
//     $st=$con->prepare($sql);
//     $st->bind_param("ssi",$name,$email,$id);
//     if($st->execute()){
//         return true;
//     }
//     else{
//         echo $con->error;
//     }
// }

// function uploadFile($name)
// {
//     $con=$GLOBALS['con'];
//     $sql="insert into profile values (null,?)";
//     $st=$con->prepare($sql);
//     $st->bind_param("s",$name);
//       if($st->execute()){
//          //header("location:welcome.php?n=$name");
//          return true;
//       }
//       else{
//           return false;
//           //echo  $con->error;
//       }
// }

?>