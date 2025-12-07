<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
</head>

<body class="layout-flex">
    <header>
        <div class="px-3 py-2 row">
            <div class="col button_left">
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li class="bg-orange">
                        <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-book-fill"></i></div>
                            <span>Writing</span>
                        </a>
                    </li>
                    <li class="bg-green">
                        <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-mic"></i></div>
                            <span>Speaking</span>
                        </a>
                    </li>
                    <li class="bg-blue">
                        <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-filter-square-fill"></i></div>
                            <span>Vocabulary</span>
                        </a>
                    </li>
                    <li class="bg-red">
                        <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-battery-charging"></i></div>
                            <span>Luyện tập</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav login_wrapper col-12 col-lg-auto my-2 justify-content-center my-md-0">
                    <li class="btn_login">
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-power"></i>
                            Đăng nhập
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col button_right">
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-trophy-fill"></i></div>
                            <span>Xếp hạng</span>
                        </a>
                    </li>
                    <li> <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-box-fill"></i></div>
                            <span>Lịch sử</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-clipboard-check-fill"></i></div>
                            <span>Nhiệm vụ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <div><i class="bi bi-bell-fill"></i></div>
                            <span>Thông báo</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <div class="owl-carousel owl-theme">
                <?php for ($i = 1; $i <= 10; $i++){ ?>
                <div class="card-item">
                    <div class="bg_img">
                        <img src="img/1.png" alt="TOEIC">
                    </div>
                    <div class="card-detail">
                        <h3>TOEIC <?php echo $i ?></h3>
                        <p>Quick Test</p>
                        <div class="level-tag">
                            <span>B1</span>
                            <span>B1</span>
                            <span>B1</span>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <footer class="mt-auto button-footer">
        <ul class="nav justify-content-center p-1">
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">
                    <i class="bi bi-graph-up-arrow"></i>
                    Kiểm tra trình độ
                </a>
            </li>
        </ul>
    </footer>
    <div id="rotate-message">📱 Vui lòng xoay ngang màn hình để sử dụng website.</div>
    <div id="content-msg">
        <h1>🎉 Chào mừng bạn!</h1>
        <p>Website này chỉ hoạt động ở chế độ ngang.</p>
    </div>

    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/plugin_build.js"></script>
</body>

</html>