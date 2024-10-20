<?php
include 'database.php';
$db = new Database();
$db->setSQL("SELECT * FROM `linhkien`");
$data = $db->layDanhSach();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Quản lý linh kiện</title>
    <style>
      </style>
</head>
<body>
<h1>Quản lí linh kiện PC
</h1>"

        <input type="text" placeholder="Tìm kiếm..." style=" 20px;font-size:1x;margin-left: 80%;">
        <button type="submit" >Tìm kiếm</button>
        
    </form>
<a class ="btn btn-primary" href="#"><button class="button-2" style="color: red;margin-top: 20px;font-size:20px;margin-left: 80%;  " onclick="window.location.href='themLK-form.php'">Thêm linh kiện</button></a>

<table>
                 <thead>
                  
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ngày nhập</th>
                    <th>Ngày xuất</th>
                    <th>Gia sản phẩm</th>
                    <th>Chức năng</th>      
                               
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                          foreach ($data as $key => $value) {
                            
                        ?>
                           <tr>
                            <td><?=$value->MaSP?></td>
                            <td><?=$value->TenSP?></td>
                            <td><?=$value->NgayNhap?></td>
                            <td><?=$value->NgayXuat?> </td>
                            <td><?=$value->GiaSP?></td>
                                              
                            <td>
                            <a href="#"><button class="button-2">Sửa</button></a>
                            <a href="xoa.php<?=$value->MaSP?>"onclick=" return confirm('Bạn có chắc muốn xóa');"><button class="button-2">Xóa</button></a>
                            </tr>
                        <?php
                          }
                        ?>
                       <div class="container">
        <div class="header-middle-group">
            <a href="/" class="header-logo">
                <img src="" alt="CSQL linh kiện" width="150" height="1" />
            </a>

           
                        <select >
                            <option >Tất cả danh mục</option> 
                            
                            <option >chuột</option>
                            
                            <option >bàn phím</option>
                            
                            <option >Card đồ họa</option>
                            
                            <option >quạt</option>
                            
                            <option >case</option>
                            
                            <option >vi sử lí</option>
                            
                            <option >RAM, ROM</option>
                            
                            <option >Màn hình Máy Tính</option>
                            
                            <option >GAMING GEAR</option>
                            
                        </select>
</div>
                    </table>     
                    </body>
                    </html>