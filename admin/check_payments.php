<?php 
include '../inc/config.php';

$sql = "SELECT COUNT(*) as count FROM payments";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row["count"];

    // Eğer ödeme sayısı arttıysa, yeni bir ödeme var demektir
    if ($count > $_SESSION['payment_count']) {
        $_SESSION['payment_count'] = $count;
        echo '<script>
        alert("Yeni bir ödeme yapıldı!");
      </script>';
    } else {
        echo 'false';
    }
} else {
    echo 'false';
}

?>