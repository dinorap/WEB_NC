<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=0.33">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Trung tâm bảo hành - Thế giới điện thoại</title>
  <link rel="shortcut icon" href="img/favicon.ico" />

  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <!-- our files -->
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/topnav.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/taikhoan.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/baohanh.css" />
  <!-- js -->
  <script src="data/products.js"></script>
  <script src="js/classes.js"></script>
  <script src="js/dungchung.js"></script>
  <script src="js/trangchu.js"></script>

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
      addChatbot()
    </script>

    <table>
      <tr>
        <td colspan="4" class="header-table">
          <marquee behavior="scroll" direction="left" scrollamount="20">Các trung tâm bảo hành của Mobile Store
          </marquee>
        </td>

      </tr>
      <tr>
        <th class="col1">STT</th>
        <th class="col2">Địa chỉ</th>
        <th class="col3">Điện thoại</th>
        <th class="col4">Thời gian làm việc</th>
      </tr>

      <script>
        var trungtam = [
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
          [
            "P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội",
            "(0000)-000 000",
            "8h00 - 17h00",
          ],
        ];

        for (var i = 0; i < trungtam.length; i++) {
          var link = "https://maps.google.com/maps?q=" + trungtam[i][0];
          document.write(
            `
                        <tr>
                            <td class="col1">` +
            (i + 1) +
            `</td>
                            <td class="col2"> 
                                <a href="` +
            link +
            `" target="_blank" title="Xem bản đồ">
                                    ` +
            trungtam[i][0] +
            `
                                </a>
                            </td>
                            <td class="col3">` +
            trungtam[i][1] +
            `</td>
                            <td class="col4">` +
            trungtam[i][2] +
            `</td>
                        </tr>
                    `
          );
        }
      </script>
    </table>
  </section>

  <script>
    addContainTaiKhoan();
  </script>

  <div class="footer">
    <script>
      addFooter();
    </script>
  </div>

  <i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
</body>

</html>