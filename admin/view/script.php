<?php
include '../../inc/config.php';

// Bağlantı kontrolü
if ($db->connect_error) {
    die("Bağlantı hatası: " . $db->connect_error);
}

// Yeni veri kontrolü için önceki toplam sayıyı al
$previousTotal = isset($_POST['previousTotal']) ? intval($_POST['previousTotal']) : 0;

// Güncel gün için ödemeleri al
$query = $db->query("SELECT * FROM payments WHERE DAY(time) = DAY(CURDATE())");

// Toplam sayıyı al
$total = $db->query("SELECT COUNT(id) AS num FROM payments WHERE DAY(time) = DAY(CURDATE())")->fetch_assoc()['num'];

// Veritabanı bağlantısını kapat
$db->close();

// Yeni veri kontrolü
$newData = ($total > $previousTotal);

// Verileri JSON formatında döndür
$response = array(
    'total' => $total,
    'newData' => $newData,
    'html' => generateNotificationList($query)
);

echo json_encode($response);

// Bildirim listesini oluşturan yardımcı bir fonksiyon
function generateNotificationList($query)
{
    $html = '';
    while ($res = $query->fetch_assoc()) {
        $html .= '<a href="payments" class="dropdown-item media" href="#">';
        $html .= '<i style="color: green;" class="fa fa-check"></i>';
        $html .= '<p>Kullanıcı : ' . $res['user'] . ' || Tutar:' . $res['amount'] . '</p>';
        $html .= '</a>';
    }
    return $html;
}
?>
