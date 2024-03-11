


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>

      .doitac {     
            border-radius: 50%;
            margin-bottom: 1em;
            width: 200px; 
            height: 200px; 
            margin-top: 25px; 
            float: left;
        }
        .a1{
          border-right: 0px ;
        }
        .a2{
    width: 30%;
    float: left;
    border-left: 2px solid black;
    padding-left: 50px;
    

}
    </style>
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
      <div class="a1">
        <br><br>
        <h2>Thời trang là gì</h2>
        <p style="margin-top: 25px;">
          Thời trang là phong cách và xu hướng của trang phục, phụ kiện, kiểu tóc và trang điểm mà mọi người tuân theo trong một thời điểm cụ thể. Nó thường được biểu hiện thông qua việc lựa chọn, kết hợp và sắp xếp quần áo, phụ kiện, giày dép và các yếu tố khác để tạo ra một diện mạo ngoại hình đẹp mắt, hài hòa và phù hợp với các hoàn cảnh khác nhau, chẳng hạn như công việc, dự tiệc, sự kiện đặc biệt hay hoạt động hàng ngày.

Thời trang không chỉ là về việc mặc đồ đẹp mắt, mà còn phản ánh phong cách, cá tính và cái tôi của mỗi người. Nó có thể thay đổi theo thời gian, địa điểm, văn hóa, xu hướng và tâm trạng của người mặc. Thời trang cũng có sự tương tác mạnh mẽ với công nghiệp thời trang, kinh tế, xã hội, văn hóa và môi trường. Nó có thể được ảnh hưởng bởi các nhà thiết kế, ngôi sao thời trang, các sàn diễn thời trang, công nghệ, môi trường bền vững và các yếu tố khác.
        </p>
        
      </div>

        <div class="a2">
            <br><br>
            <h2>Đối tác</h2>

            <?php
            $logo1 = 1;
            $logo2 = 1;
            $logo3 = 1;

            if ($logo1 == 1) : {

              ?>

              <div class="shopsang">
              <img class="doitac"  src="images/doitac.jpg" alt="" >

              <h4 style="float: left; margin-top: 25px;"> <br><br><br>Shop Sang</h3>
              <br style="clear: both;">
              </div>

              <?php
                 } endif;

                 if ($logo2 == 1) : {

                  ?>
    
          <div class="shopphuoc">
            <img  class="doitac" src="images/doitac2.jpg" alt="" >
            <h4 style="float: left; margin-top: 25px;"> <br><br><br>Shop Phước</h3>
            <br style="clear: both;"> 

            </div>
    
                  <?php
                     } endif;
                     if ($logo3 == 1) : {

                      ?>
        
        <div class="shopson">
              <img  class="doitac" src="images/doitac3.jpg" >
              <h4 style="float: left; margin-top: 25px;"> <br><br><br>Shop Sơn</h3>
              <br style="clear: both;"> 
            </div>
        
                      <?php
                         } endif;

              ?>


                 

          

                 
    </section>


    
    <div class="quick-registration register-bottom">
      <div class="container">
              <h2>Trần Quang Thái</h2> 
            </div>
          </div>
      </div>
  </div>
</div>
      </div>
      


<div id="footer" class="footer">
  <div class="footer-menu">
      <div class="container">
          <div class="row">
              <div class="col-lg col-md-4 col-6">
                  <div class="title" style="color: white;">Shop Quang Thái</div>
                  <ul>   
                  </ul>
              </div>
          
          </div>
      </div>
  </div>

  

  <div class="footer-address" style=" color: white;"  >
    
     
  
      <div class="container" style="background-color: black;">
        <center><img src="images/logo.jpg" alt="" style="border-radius: 50%;width: 100px;height: 100px;">
        </center>
        
          <div class="row">
           <center> <h3>Shop Quang Thái</h3></center> 

             
              <div class="col-w-20 col-md-4" style="margin-right: 200px ; margin-left: 150px;">
                  <div class="title">Tổng đài hỗ trợ</div>
                  <ul class="contact">
                      <li>Tư vấn dịch vụ: <b>0359977925</b></li>
                      <li>Email:tranquangthai188@gmail.com</li>
                      <li>Từ 7h00 – 22h00 các ngày từ thứ 2 đến Chủ nhật</li>
                  </ul>
              </div>
             
              <div class="col-w-20 col-lg col-md-4" style="width: 40%;" >
                  <div class="title">Hợp tác</div>
                  <ul>

                  </ul>
                  <div class="title mr-t-30">Liên hệ hợp tác</div>
                  <ul class="contact">
                      <li>Phone: 0359977925 <b></b></li>
                      <li>Email: tranquangthai188@gmail.com<b></b></li>
                  </ul>
              </div>
             
              
          </div>
      </div>
  </div>
  
</div>
</div>


</body>
</html>