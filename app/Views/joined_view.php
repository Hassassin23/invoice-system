<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Име</th>
            <th>ЕИК</th>
            <th>Дата</th>
            <th>Номер</th>
            <th>Сума</th>
        </tr>
        <?php foreach ($invoices as $invoice): ?>
        <tr>
            <td><?= esc($invoice->user_name) ?></td>
            <td><?= esc($invoice->user_eic) ?></td>
            <td><?= date('d.m.Y', strtotime($invoice->date)) ?></td>
            <td><?= esc($invoice->invnum) ?></td>
            <td><?= esc($invoice->sum) ?> лв.</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>