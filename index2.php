
<html>
	<head>
		<title>Advanced Web Development K15-N02</title>
	</head>
	<body>
    <?php
for ($i = 1; $i <= 200; $i++) {
    if ($i % 2 == 0) {
        // Số chẵn
        echo "<span style='color: red; font-weight: bold;'>$i</span> ";
    } else {
        // Số lẻ
        echo "<span style='color: blue; font-style: italic;'>$i</span> ";
    }
}
?>
	</body>
</html>