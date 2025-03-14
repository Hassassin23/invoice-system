<?php
namespace App\Models;
use CodeIgniter\Model;

class InvoiceModel extends Model {
    protected $table = 'invoices';
    protected $primaryKey = 'invoice_id';
    protected $allowedFields = ['user', 'date', 'sum', 'invnum'];
}