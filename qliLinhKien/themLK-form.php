<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM LINH KIỆN</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <input type="text" placeholder="Tìm kiếm..." style=" 20px;font-size:1x;margin-left: 80%;">
    <button type="submit" >Tìm kiếm</button>

    <div class="container">
        <div class="row mt-4">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="float-start text-white">THÊM LINH KIỆN</h2>
                    <h2 class="float-end "><a href="index.php" class="btn btn-danger">Back</a> </h2>                   
                </div>
                <div class="col-md-8 mt-4">
                    <div class="card-body">
                        
          
                        <select>
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

                        <form action="themLK.php" method="post">
                            <div class="mb-3">
                                <label>Mã sản phẩm</label>
                                <input type="text" name="MaSP" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="TenSP" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ngày nhập hàng </label>
                                <input type="text" name="NgayNhap" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ngày xuất hàng </label>
                                <input type="text" name="NgayXuat" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Giá sản phẩm</label>
                                <input type="text" name="GiaSP" class="form-control">
                            </div>
                            
                           

                            <div class="mb-3 float-end">
                                <input type="submit" name="add" value="Thêm linh kiện" class="btn btn-primary">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
