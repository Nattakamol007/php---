<?php
date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ข้อมูลเซิร์ฟเวอร์</title>
</head>
<body>
  <h1>เซิร์ฟเวอร์ของทีม</h1>
  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>รายการ</th>
      <th>ค่า</th>
    </tr>
    <tr><td>เวอร์ชัน PHP</td>
      <td><?php echo phpversion(); ?></td>
    </tr>
    <tr><td>ซอฟต์แวร์เว็บเซิร์ฟเวอร์</td>
      <td><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></td>
    </tr>
    <tr><td>ชื่อเครื่อง:พอร์ต</td>
      <td><?php echo $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']); ?></td>
    </tr>
    <tr><td>Timezone</td>
      <td><?php echo date_default_timezone_get(); ?></td>
    </tr>
    <tr><td>เวลาบนเซิร์ฟเวอร์</td>
      <td><?php echo date('d/m/Y H:i:s'); ?></td>
    </tr>
  </table>
</body>
</html>