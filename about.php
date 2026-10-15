<?php
$team = 'hello_world';
$topic = 'php-hello_world';
$problem = 'ระบบแจ้งเตือนปัญหาในวิทยาลัย';
$members = ['ณัฐกมล ค้ำจุน (Developer A)', 'ทิฆัมพร วงทวีศ์ (Developer B)'];

$goals = [
    'รับแจ้งปัญหาอุปกรณ์ชำรุดในวิทยาลัย',
    'ติดตามสถานะการแก้ไขแบบ Real-time',
    'เก็บสถิติเพื่อวางแผนบำรุงรักษา' ]
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เกี่ยวกับเรา - <?php echo $topic; ?></title>
</head>
<body>
    <nav>
        <a href="index.php">หน้าแรก</a> |
        <a href="about.php">เกี่ยวกับเรา</a> |
        <a href="server.php">ข้อมูลเซิร์ฟเวอร์</a>
    </nav>
    <hr>

    <h1><?php echo $topic; ?></h1>
    <p>ทีม: <?php echo $team; ?></p>
    <p>ปัญหาที่แก้: <?php echo $problem; ?></p>

    <h2>สมาชิก</h2>
    <ul><?php foreach ($members as $m): ?><li><?php echo $m; ?></li><?php endforeach; ?>
    </ul>

    <h2>เป้าหมายของระบบ (ทั้งหมด <?php echo count($goals); ?> ข้อ)</h2>
    <ol><?php foreach ($goals as $goal): ?><li><?php echo $goal; ?></li><?php endforeach; ?>
    </ol>

    <p>อัปเดตล่าสุด: <?php echo date('d/m/Y H:i'); ?></p>
</body>
</html>