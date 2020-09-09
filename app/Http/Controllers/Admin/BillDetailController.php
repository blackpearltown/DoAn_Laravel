<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BillDetailController extends Controller
{
    public function getBillDetail($bill_id){
        $data['bills'] = Bill::find($bill_id);
        $data['billdetails'] = BillDetail::where('bill_id', $bill_id)->get();
        return view('admin.billdetails.billdetail',$data);
        
    }
}
