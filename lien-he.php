<?php require(__DIR__.'/layouts/header.php'); ?>  
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Liên Hệ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Cart Page Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container">

                <div class="row mt--60 ">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">Thông Tin Cửa Hàng</h3>
                                <hr>
                            </div>
                            <div class="address_wrapper">
                                <div class="address">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Địa chỉ:</span> Ngõ 58, Dịch Vọng Hậu, Cầu Giấy, Hà Nội</p>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> hotro@pustok.com </p>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Số Điện Thoại:</span> 0988.888.999 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                        <div class="contact_form">
                            <h3 class="ct_title">Gửi Phản Hồi</h3>
                            <form id="contact-form" action="php/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Họ tên<span class="required">*</span></label>
                                            <input type="text" id="con_name" name="con_name" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" id="con_email" name="con_email" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Điện thoại</label>
                                            <input type="text" id="con_phone" name="con_phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Tin nhắn</label>
                                            <textarea id="con_message" name="con_message"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black"
                                                name="submit">Phản Hồi</button>
                                        </div>
                                        <div class="form__output"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Cart Page End -->
    </div>
<?php require(__DIR__.'/layouts/footer.php'); ?>  