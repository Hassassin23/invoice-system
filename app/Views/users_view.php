<!DOCTYPE html>
<html>
<head>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Име</th>
            <th>ЕИК</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['user_name']) ?></td>
            <td><?= esc($user['user_eic']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>