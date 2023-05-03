<?php require(__DIR__.'/layouts/header.php'); ?>		

<?php 
require('../database/connect.php');	
require('../database/query.php');	
$sql = "SELECT sanpham.*, chuyenmuc.tenchuyenmuc FROM sanpham, chuyenmuc WHERE sanpham.machuyenmuc = chuyenmuc.machuyenmuc";
$result = queryResult($conn,$sql);

?>

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Quản Lý Sản Phẩm</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
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
                                	Sản Phẩm
                                	<a class="btn btn-success text-white" style="float: right;" href="them-san-pham.php">Thêm Sách</a>
                            	</h4>
                                <h6 class="card-subtitle">Thông tin các sản phẩm trong cửa hàng</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Danh sách sản phẩm</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tên Sản Phẩm</th>
                                                <th scope="col">Mô Tả Ngắn</th>
                                                <th scope="col">Giá Gốc</th>
                                                <th scope="col">Giá Bán</th>
                                                <th scope="col">Chuyên Mục</th>
                                                <th scope="col">Thẻ</th>
                                                <th scope="col">Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       		<?php if(!isset($result->num_rows)){ ?>
                                       			<p>Không có sản phẩm nào để hiển thị</p>
                                       		<?php } else { ?>
                                        	<?php 
					                            $i = 1;
					                        ?>
					                        <?php while($row = $result->fetch_assoc()) { ?>
	                                            <tr>
	                                                <th scope="row"><?php echo $i; ?></th>
	                                                <td><?php echo $row['tensanpham']; ?></td>
	                                                <td><?php echo $row['mota']; ?></td>
	                                                <td><?php echo $row['giagoc']; ?></td>
	                                                <td><?php echo $row['giaban']; ?></td>
	                                                <td><?php echo $row['tenchuyenmuc']; ?></td>
	                                                <td><?php echo $row['tag']; ?></td>
	                                                <td>
	                                                	<a href="sua-san-pham.php?id=<?php echo $row['masanpham']; ?>" style="margin-right: 10px;"><i class="fa-solid fa-pen-to-square"></i></a>
	                                                	<a href="xoa-san-pham.php?id=<?php echo $row['masanpham']; ?>"><i class="fa-solid fa-trash"></i></a>
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
