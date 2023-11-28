
 <div class="pcoded-content">

     <div class="page-header card">
         <div class="row align-items-end">
             <div class="col-lg-8">
                 <div class="page-header-title">
                     <i class="feather icon-home bg-c-blue"></i>
                     <div class="d-inline">
                         <h5>Sản phẩm</h5>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="page-header-breadcrumb">
                     <ul class=" breadcrumb breadcrumb-title">
                         <li class="breadcrumb-item">
                             <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                         </li>
                         <li class="breadcrumb-item"><a href="#!">Sản phẩm</a> </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class="pcoded-inner-content">
         <div class="main-body">
             <div class="page-wrapper">
                 <div class="page-body">


                     <div class="card">
                         <div class="card-header">
                             <h5>Danh sách Sản phẩm</h5>
                             <a href="/admin/sanpham/create" class="btn btn-info">Thêm</a>
                         </div>

                         <div class="row">
                             <div class="col-sm-12">
                                 <div class="card">

                                     <div class="card-block">
                                         <div class="dt-responsive table-responsive">
                                             <table class="table table-striped table-bordered nowrap" id="simpletable">
                                                 <thead>
                                                     <tr>
                                                         <th>ID</th>
                                                         <th>Name</th>
                                                         <th>IMG</th>
                                                         <th>Mô Tả</th>
                                                         <th>Giá</th>
                                                         <th>Số Lượng</th>
                                                         <th>Tên danh mục</th>
                                                         <th>Tên Color</th>
                                                         <th>Tên Size</th>
                                                         <th>Lượt xem </th>
                                                         <th>Action </th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                     <?php foreach ($sanpham as $item) : ?>
                                                         <tr>
                    
                                                             <td><?= $item['id'] ?></td>
                                                             <td><?= $item['ten_sp'] ?></td>
                                                             <td><img src="<?= $item['img_sp'] ?>" alt="" height="50px" width="50px"></td>
                                                             <td><?= $item['mota_sp'] ?></td>
                                                             <td><?= $item['gia_sp'] ?></td>
                                                             <td><?= $item['soluong_sp'] ?></td>
                                                             <td><?= $arrayCategoryIdName[$item['id_dm']] ?></td>
                                                             <td><input type="color" value="<?= $arrayColorIdName[$item['id_color']] ?> ?>" disabled></td>
                                                             <td><?= $arrayColorIdName[$item['id_size']] ?></td>
                                                             <td><?= $item['luotxem'] ?></td>
                                                             <td>
                                                                 <a href="/admin/sanpham/update?id=<?= $item['id'] ?>" class="btn btn-primary btn-sm mt-2">Cập nhật</a>

                                                                 <form action="/admin/sanpham/delete?id=<?= $item['id'] ?>" method="post">
                                                                     <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                                 </form>
                                                             </td>
                                                         </tr>
                                                     <?php endforeach; ?>
                                                 </tbody>
                                             </table>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>