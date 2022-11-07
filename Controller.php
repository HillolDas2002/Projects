<?php
    include 'DataFetch.php';
// <-- --Login-- -->
    if(isset($_POST['button1'])){
      $name=$_POST['name'];
      $pass=$_POST['pass'];
      $user=array("name"=>$name,"password"=>$pass);
      if(login($user)){
        session_start();
        $_SESSION['n']=$name;
        header("location:WebsiteFinal.php");
      }
      else{
        session_start();
        $_SESSION['msg']="user credential is wrong!!!";
        header("location:Signin.php");
      }
    }


// <-- --Registration-- -->
  if(isset($_POST['button0'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $phone=$_POST['numb'];
        $user=array("name"=>$name,"email"=>$email,"password"=>$pass,"phoneno"=>$phone);
        if(addUser($user)){
          session_start();
          $_SESSION['n']=$name;
          header("location:Signin.php");
        }
        else{
          header("location:Signin.php");
        }

  }

  
  // $users=getUsers();

  // if(isset($_POST['del'])){
  //   $id=$_POST['id'];
  //   if(deleteUser($id)){
  //     header("location:Welcome.php");
  //   }
  //   else{
  //     header("location:Registration.php");
  //   }
  // }

  // if(isset($_POST['edit'])){
  //   $name=$_POST['name'];
  //   $email=$_POST['email'];
  //   $id=$_POST['id'];

  //   $user=array('id'=>$id,'Name'=>$name, 'Email'=>$email);
  //   if(editUser($user)){
  //     header("location:Welcome.php?id=$id");
  //   }
  //   else{
  //     header("location:edit_user.php?id=$id");
  //   }
  // }

  // if(isset($_POST['submit']) && isset($_FILES['profile']))
  // {
  //   echo "<pre>";
  //   print_r($_FILES['profile']);
  //   echo "</pre>";
  //   $file=$_FILES['profile'];
  //   $name=$file['name'];
  //   $type=$file['type'];
  //   $size=$file['size'];
  //   $error=$file['error'];
  //   $tmp_name=$file['tmp_name'];
  //   if($error == 0)
  //   {
  //       if($size<1250000)
  //       {
  //           $ext=pathinfo($name,PATHINFO_EXTENSION);
  //           $ext_low=strtolower($ext); //string to lower case
  //           $new_name=uniqid("IMG-",true).".".$ext_low; //Generate unique id of the image
  //           echo $new_name;
  //           if(uploadFile($new_name))
  //           {
  //             move_uploaded_file($tmp_name,"upload/".$new_name);
  //             echo "Successfully Loaded";
  //           }
  //       }
  //   }
  //   else
  //   {
  //     echo "It exits maximum file size.";
  //   }
  // }
?>