<?php require(__DIR__.'/layouts/header.php'); ?>		

<?php 
require('../database/connect.php');	
require('../database/query.php');	
$sql = "SELECT * FROM khachhang";
$result = queryResult($conn,$sql);

?>

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Khách Hàng</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khách Hàng</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                	Khách Hàng
                            	</h4>
                                <h6 class="card-subtitle">Thông tin khách hàng trong hệ thống</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách khách hàng</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tên Khách Hàng</th>
                                                <th scope="col">Địa Chỉ</th>
                                                <th scope="col">Số Điện Thoại</th>
                                                <th scope="col">Trạng Thái</th>
                                                <th scope="col">Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       		<?php if(!isset($result->num_rows)){ ?>
                                       			<p>Không có khách hàng nào để hiển thị</p>
                                       		<?php } else { ?>
                                        	<?php 
					                            $i = 1;
					                        ?>
					                        <?php while($row = $result->fetch_assoc()) { ?>
	                                            <tr>
	                                                <th scope="row"><?php echo $i; ?></th>
	                                                <td><?php echo $row['tenkhachhang']; ?></td>
	                                                <td><?php echo $row['diachi']; ?></td>
	                                                <td><?php echo $row['sodienthoai']; ?></td>
	                                                <td>
                                                        <?php if($row['trangthai']){
                                                            echo "Được phép hoạt động";
                                                        }else{
                                                            echo "Không được phép";
                                                        } ?>
                                                            
                                                    </td>
	                                                <td>
                                                        <?php if($row['trangthai']){ ?>
                                                            <a href="sua-khach-hang.php?id=<?php echo $row['makhachhang']; ?>&action=0"><i class="fa-solid fa-x"></i> Ngừng tài khoản</a>
                                                        <?php }else{ ?>
                                                            <a href="sua-khach-hang.php?id=<?php echo $row['makhachhang']; ?>&action=1"><i class="fa-solid fa-check"></i> Cho phép hoạt động</a>
                                                        <?php } ?>
	                                                </td>
	                                            </tr>
                                            <?php $i++; } } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php require(__DIR__.'/layouts/footer.php'); ?>		
