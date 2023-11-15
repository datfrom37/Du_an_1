<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/home.css">
    <style>
        .container {
            padding: 1vh 0 1vh 0;
        }

        .box-container {
            padding: 10px 0 10px 0;
            text-align: center;
            /* Căn giữa nội dung */
            margin: 3vh 0 10px 2vh;
            border-radius: 15px;
            background: rgba(255, 225, 69, 0.51);
        }

        .image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            object-fit: cover;

        }

        .boxmain {
            border-radius: 5px;
            background: var(--White, #FFF);
            /* Base shadow */
            box-shadow: 0px 8px 40px 0px rgba(0, 0, 0, 0.08);
            margin-top: 5vh;
        }

        .p-mr {
            margin-top: 2vh;
        }

        .p-mrd {
            margin-bottom: 1vh;
        }

        .stars {
            color: #ffd700;
            /* Màu của sao */
            font-size: 24px;
            /* Kích thước của sao */
            margin-top: 2vh;
        }

        .stars xs {
            color: black;
            margin-left: 3vh;
            font-size: 18px;
        }

        /* Tùy chỉnh kiểu dáng */
        .custom-box {
            padding: 20px;
        }
        .custom-box h2{
            color: #D2B000;
            /* Title/2 */
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 32px; /* 133.333% */
            margin-bottom: 2vh;
        }

        h2 {
            margin-top: 0;
            /* Loại bỏ khoảng trống mặc định trên cùng của tiêu đề */
        }
    </style>
</head>

<body>
    <!-- tong quan cong thuc -->
    <div class="container boxmain">
        <div class="row">
            <div class="col-md-5">
                <!-- Hình ảnh -->
                <img src="pages/imgweb/banhxeo.jpg" alt="Hình ảnh" class="image">
            </div>
            <div class="col-md-7">
                <!-- Tiêu đề -->
                <h2 style="width: 95%;">Lẩu bắp bò nhúng hành răm - Món ngon bổ dưỡng cuối tuần</h2>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <xs> (5.0 / 999) </xs>
                </div>


                <ul class='row'>
                    <l class="col-md-1 "></l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fa-solid fa-fire-burner"></i> </p>15 Phút <p class="p-mr">Thời gian
                            nấu</p>
                    </l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fas fa-star"></i> </p>Dễ <p class="p-mr">Độ khó</p>
                    </l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fas fa-clock"></i> </p>15 Phút <p class="p-mr">Sơ chế</p>
                    </l>
                    <l class="col-md-2 box-container">
                        <p class="p-mrd"><i class="fas fa-user"></i> </p>4 Người <p class="p-mr">Khẩu phần</p>
                    </l>
                    <l class="col-md-1"></l>
                </ul>
            </div>
        </div>
    </div>
    <!-- END tong quan cong thuc -->

    <div class="container ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="custom-box boxmain">
                    <h2>Nguyên liệu</h2>
                    <p>Nội dung của Box 1. Dòng 1.</p>
                    <p>Nội dung của Box 1. Dòng 2.</p>
                    <p>Nội dung của Box 1. Dòng 3.</p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="custom-box boxmain">
                    <h2>Hướng dấn nấu ăn</h2>
                    <p>Nội dung của Box 2. Dòng 1.</p>
                    <p>Nội dung của Box 2. Dòng 2.</p>
                    <p>Nội dung của Box 2. Dòng 3.</p>
                </div>
            </div>
        </div>
    </div>
</body>