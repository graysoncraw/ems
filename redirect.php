<?php 
  session_start();

  include ("db_connection.php");

  $uid=($_POST['username']);
  
  $pwd=($_POST['password']);

  $sql = "SELECT * FROM Users_tab u, Student_tab s, Faculty_tab f WHERE (u.userid = '$uid' AND u.password = '$pwd' AND u.id = s.student_id) 
  OR (u.userid = '$uid' AND u.password = '$pwd' AND u.id = f.fac_id) OR (u.userid = '$uid' AND u.password = '$pwd' AND u.role = 'A')";
  $result=$connect->query($sql);
  $row = $result->fetch_assoc(); 


  if(($row['role']=='S') && (isset($_POST['captcha']) && ($_POST['captcha']!=""))){  //Students
    if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0)
    {
      $_SESSION['message'] = "<span style='color:red;'>Entered captcha code is incorrect.</span>";
      header('location: index.php');

    }
    else{
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['major'] = $row['student_major'];
      $_SESSION['uid']=$uid;
      $_SESSION['pwd']=$pwd;
      $_SESSION['role'] = "S";
      header('location: student/index.php');
    }
  }
  elseif($row['role']=='F' && (isset($_POST['captcha']) && ($_POST['captcha']!=""))){  //Faculty
    if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0)
    {
      $_SESSION['message'] = "<span style='color:red;'>Entered captcha code is incorrect.</span>";
      header('location: index.php');

    }
    else
    {
      $_SESSION['id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['uid']=$uid;
      $_SESSION['pwd']=$pwd;
      $_SESSION['role'] = "F";
      header('location: faculty/index.php');
    }
  }
	elseif($row['role']=='A' && (isset($_POST['captcha']) && ($_POST['captcha']!=""))) { //Admin
    if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0)
    {
      $_SESSION['message'] = "<span style='color:red;'>Entered captcha code is incorrect.</span>";
      header('location: index.php');
    }
    else
    {
      $_SESSION['uid']=$uid;
      $_SESSION['pwd']=$pwd;
      $_SESSION['role'] = "A";
      $_SESSION['name'] = $row['name'];
      header('location: admin/index.php');
    }
  }
  else
    {
      $_SESSION['message'] = "<span style='color:red;'>Username or password is incorrect</span>";
      header('location: index.php');
    }
 ?>
