<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style>
      button{
          width: 200px;
          padding: 15px 0;
          text-align: center;
          margin: 20px 10px;
          border-radius: 25px;
          font-weight: bold;
          border: 2px solid #300505;
          background: transparent;
          color: #fff;
          cursor: pointer;
          position: relative;
          overflow: hidden;
     }
     span{
          background: #ff0000;
          height: 100%;
          width: 0;
          border-radius: 25px;
          position: absolute;
          left: 0;
          bottom: 0;
          z-index: -1;
          transition: 0.5s;
     }
     button:hover span{
          width: 100%;
     }
     button:hover{
          border: none;
     }
     </style>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <div><button type="button"><span></span><a href="logout.php">Logout</a></button>
                <button type="button"><span></span><a href="index1.html">HOME</a></button></div>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>