<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuckyFood</title>
    <link rel="stylesheet" href="{{ asset('client/css/party.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <style>
        .name_store {
            font-weight: bold;
            font-size: 18px;
        }
        .address {
            color: #32CD32; 
            font-size: 14px; 
        }
    </style>
<body>
    <div class="containerr">
    <div class="header">
        <div class="logo">LUCKY
            <img src="{{ asset('client/img/luckyy.png') }}" alt="">
        </div>
        <div class="title">NHẬN ĐẶT TIỆC & BÁO GIÁ</div>
        <div class="user"></div>
    </div>

    <div class="main">
        <div class="form">
            <div>
                <button id="eventButton" type="button" class="btn btn-success dropdown-toggle mb-2" data-bs-toggle="dropdown">
                    Loại Sự Kiện
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="updateButton('eventButton', 'Tiệc sinh nhật')">Tiệc sinh nhật</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('eventButton', 'Tiệc liên hoan')">Tiệc liên hoan</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('eventButton', 'Tiệc chúc mừng')">Tiệc chúc mừng</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('eventButton', 'Dịch vụ khác')">Dịch vụ khác</a></li>
                </ul>
            </div>
            
            <div>
                <button id="guestButton" type="button" class="btn btn-success dropdown-toggle mb-2" data-bs-toggle="dropdown">
                    Số lượng khách
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="updateButton('guestButton', '0-20')">0-20</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('guestButton', '21-50')">21-50</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('guestButton', '50+')">50+</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('guestButton', 'Chưa quyết định')">Chưa quyết định</a></li>
                </ul>
            </div>
            
            <div>
                <button id="locationButton" type="button" class="btn btn-success dropdown-toggle mb-2" data-bs-toggle="dropdown">
                    Địa điểm
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="updateButton('locationButton', 'Cửa hàng A')">
                        <div>
                            <div class="name_store">Cửa hàng A</div>
                            <div class="address">10 Nguyễn Văn Bảo, P4, Gò Vấp, HCM</div>
                        </div>
                    </a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('locationButton', 'Cửa hàng B')">
                        <div>
                            <div class="name_store">Cửa hàng B</div>
                            <div class="address">123 Phan Xích Long, Phú Nhuận, HCM</div>
                        </div>
                    </a></li>
                </ul>
            </div>
            
            <div>
                <button id="menuButton" type="button" class="btn btn-success dropdown-toggle mb-2" data-bs-toggle="dropdown">
                    Menu
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="updateButton('menuButton', 'Combo 1')">Combo 1</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('menuButton', 'Combo 2')">Combo 2</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('menuButton', 'Thức ăn nhẹ')">Thức ăn nhẹ</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateButton('menuButton', 'Thức uống & tráng miệng')">Thức uống & Tráng miệng</a></li>
                </ul>
            </div>
            
            <div>
                <button id="timeButton" type="button" class="btn btn-success dropdown-toggle mb-2" data-bs-toggle="dropdown">
                    Thời gian dự kiến diễn ra
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="input-group">
                                <span class="input-group-text">Chọn</span>
                                <input type="date" class="form-control" onchange="updateDate(this, 'timeButton')">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            
            <script>
                function updateButton(buttonId, value) {
                    document.getElementById(buttonId).textContent = value;
                }

                function updateDate(input, buttonId) {
                    const date = input.value;
                    if (date) {
                        document.getElementById(buttonId).textContent = "Ngày: " + date;
                    }
                }
            </script>
        </div>
        
        <div class="content">
            <img src="{{ asset('client/img/Fastfood.jpg') }}" alt="">
        </div>

    </div>

    <div class="footer">
        <div class="contact-info">
            <p>Liên hệ</p>
            <ul1>
                <li>📍 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp, Hồ Chí Minh</li>
                <li>📞 0900990000</li>
                <li>📧 lienhe@luckyfastfood.com</li>
            </ul1>
        </div>
        <div class="company-info">
            <p>CÔNG TY TNHH LUCKY VIỆT NAM</p>
            <img src="{{ asset('client/img/luckyy.png') }}" alt="">
        </div>
        <div class="policies">
            <p>Chính sách</p>
            <ul2>
                <li>Chính sách hoạt động</li>
                <li>Chính sách và quy định</li>
                <li>Chính sách bảo mật</li>
            </ul2>
        </div>
    </div>
    
</div>

</body>
</html>
