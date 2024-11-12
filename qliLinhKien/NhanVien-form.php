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
                    <h2 class="float-start text-white">THÊM Nhân Viên</h2>
                    <h2 class="float-end "><a href="NhanViena.php" class="btn btn-danger">Back</a> </h2>                   
                </div>
                <div class="col-md-8 mt-4">
                    <div class="card-body">
                        
          
                        

                        <form action="NhanVien.php" method="post">
                            <div class="mb-3">
                                <label>Mã nhân viên</label>
                                <input type="text" name="MaNV" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên nhân viên</label>
                                <input type="text" name="TenNV" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Giới tính</label>
                                <input type="text" name="GioiTinh" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số Điện Thoại </label>
                                <input type="text" name="SDT" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Địa Chỉ </label>
                                <input type="text" name="DiaChi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Chức vụ</label>
                                <input type="text" name="ChucVu" class="form-control">
                            </div>
                            
                           

                            <div class="mb-3 float-end">
                                <input type="submit" name="add" value="Thêm người dùng" class="btn btn-primary">
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
