<!DOCTYPE html>
<html>
<body>
<?php
$d1=strtotime("December 24");
$d2=ceil(($d1-time())/60/60/24);
// ($d1 - time()) / 60: Chia số giây còn lại cho 60 để chuyển đổi từ giây sang phút.

// (($d1 - time()) / 60) / 60: Chia số phút cho 60 để chuyển đổi từ phút sang giờ.

// ((($d1 - time()) / 60) / 60) / 24: Chia số giờ cho 24 để chuyển đổi từ giờ sang ngày.
echo "There are " . $d2 ." days until 24th of December.";
?>
<h2>aasdasdas</h2>
</body>
</html>