<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=0.33">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Giới thiệu - Thế giới điện thoại</title>
  <link rel="shortcut icon" href="./img/favicon.ico" />

  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- our files -->
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/topnav.css" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/taikhoan.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/gioithieu.css" />

  <!-- js -->
  <script src="./data/products.js"></script>
  <script src="./js/classes.js"></script>
  <script src="./js/dungchung.js"></script>
  <script src="./js/trangchu.js"></script>
  <script>
    window.onload = function () {
      khoiTao();
      // thêm tags (từ khóa) vào khung tìm kiếm
      var tags = ["Samsung", "iPhone", "Huawei", "Oppo", "Mobi"];
      for (var t of tags) addTags(t, "index.php?search=" + t);
    };
  </script>
</head>

<body>
  <script>
    addTopNav();
  </script>

  <section style="min-height: 100vh">
    <script>
      addHeader();
    </script>

    <div class="page-gt">
      <h4 class="page-header">Giới thiệu</h4>
      <div class="page-info">
        <p>
          Web được tìm hiểu và hoàn thiện phát triển bởi nhóm 6 dựa trên các
          tài liệu trên mạng và sự Hướng dẫn của giảng viên
        </p>
        <br />
        <p>
          Chúng tôi luôn đem lại cho khách hàng sự hài lòng và thỏa mãn với
          tất cả các sản phẩm của mình.<br />
          Bên cạnh đó là đội ngũ nhân viên nhiệt tình chu đáo và đầy kinh
          nghiệm của chúng tôi luôn đưa được ra cho khách hàng những thông tin
          có giá trị và giúp khách hàng lựa chọn được những sản phẩm phù hợp
          nhất.<br />
          Để nâng cao thương hiệu của mình, mục tiêu của chúng tôi trong thời
          gian tới là cung cấp đến tận tay khách hàng những sản phẩm chính
          hãng với chất lượng đảm bảo và uy tín cũng như giá cả hợp lý
          nhất.<br />
          Chúng tôi mong muốn sự đóng góp của khách hàng sẽ giúp chúng tôi
          ngày một phát triển để từ đó củng cố thêm lòng tin của khách hàng
          với chúng tôi. Chúng tôi rất biết ơn sự tin tưởng của khách hàng
          trong suốt gần 10 năm qua và chúng tôi luôn tâm niệm rằng cần phải
          cố gắng hơn nữa để xứng đáng với phương châm đề ra “Nếu những gì
          chúng tôi không có, nghĩa là bạn không cần .<br />
          Chúng tôi xin chân thành cảm ơn tất cả các khách hàng đã, đang và sẽ
          ủng hộ chúng tôi.
        </p>
      </div>
    </div>
  </section>

  <script>
    addContainTaiKhoan();
  </script>

  <div class="footer">
    <script>
      addFooter();
      addChatbot()
    </script>
  </div>

  <i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
</body>

</html>