<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\InvoiceModel;

class InvoiceController extends BaseController {
    public function get_users() {
        $model = new UserModel();
        $data['users'] = $model->orderBy('user_id', 'DESC')->findAll();
        return view('users_view', $data);
    }

    public function get_invoices($start_date, $end_date) {
        $model = new InvoiceModel();
        $data['invoices'] = $model
            ->where('date >=', $start_date)
            ->where('date <=', $end_date)
            ->findAll();
        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;
        return view('invoices_view', $data);
    }

    public function get_joined() {
        $db = \Config\Database::connect();
        $builder = $db->table('invoices');
        $builder->select('users.user_name, users.user_eic, invoices.date, invoices.invnum, invoices.sum');
        $builder->join('users', 'invoices.user = users.user_id');
        $data['invoices'] = $builder->get()->getResult();
        return view('joined_view', $data);
    }
}