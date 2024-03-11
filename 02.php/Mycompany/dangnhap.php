<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center style="background-color: aqua; border-bottom : 2px solid black" >
        <img src="images/logo.jpg" alt="" style="border-radius: 50%; width: 150px; height: 150px;">
        <h1>Trần Quang Thái</h1>
    </center>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 50px; margin-right: 50px;  " >
    <?php 
    $menu = 1;
    $gioithieu = 1;
    $sanpham = 1;
    $lienhe = 1 ;
    if($menu==1):{
      ?>
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <?php 
    } endif; if($gioithieu==1):{
      ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="gioithieu.php">Giới thiệu</a>
              
            </li>
            
            <li class="nav-item dropdown">
            <?php 
    } endif; if($sanpham==1):{
      ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <a class="nav-link dropdown-toggle" href="sanpahm.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sản phẩm
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         
      </div>
        <?php 
    } endif; if($lienhe==1):{
      ?>
      <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dangnhap.html">Dang nhap
              </a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Từ khóa " aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
          </form>
          
          <?php 
    } endif;
    ?>

        
        
            
      
    </nav>

   

    <section style = "border-top : 2px solid black">

    <center>
        <form method="POST" action="login.php">
            <fieldset>
                <legend>Đăng nhập</legend>
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" size="30"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" size="30"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
                        </tr>
                    </table>
          </fieldset>
          </form>
    </center>
    
    
</body>
</html>