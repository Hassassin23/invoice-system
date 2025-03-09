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
    <h2>Фактури за периода <?= $start_date ?> до <?= $end_date ?></h2>
    <table>
        <tr>
            <th>Номер</th>
            <th>Сума</th>
            <th>Дата</th>
        </tr>
        <?php foreach ($invoices as $invoice): ?>
        <tr>
            <td><?= esc($invoice['invnum']) ?></td>
            <td><?= esc($invoice['sum']) ?> лв.</td>
            <td><?= date('d.m.Y', strtotime($invoice['date'])) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>