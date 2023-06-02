<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BudgetController extends Controller
{

    public function index(){
        return view('spendmoney');
    }

    public function hitung(Request $request){
        
        // Input nilai uang saku
        $uang_saku = $_POST['uang_saku'];

        // Pilihan uang saku yang akan disimpan
        $pilihan_simpan = $_POST['pilihan_simpan'];
        if($pilihan_simpan == '10'){
            $simpan = $uang_saku * 0.1;
        } elseif ($pilihan_simpan == '20') {
            $simpan = $uang_saku * 0.2;
        } elseif ($pilihan_simpan == '30') {
            $simpan = $uang_saku * 0.3;
        }

        // sisa uang
        $sisa_uang = $uang_saku - $simpan;
        
        //data input yang ada di item
        $expenses = array (
            array('name' => 'Makanan', 'price' => $_POST['makanan'] ?? 0, 'bobot' => 5, 'priority' => 5),
            array('name' => 'Transportasi', 'price' => $_POST['transportasi'] ?? 0, 'bobot' => 4, 'priority' => 4),
            array('name' => 'Hiburan', 'price' => $_POST['hiburan'] ?? 0, 'bobot' => 3, 'priority' => 3),
            array('name' => 'Pulsa', 'price' => $_POST['pulsa'] ?? 0, 'bobot' => 3, 'priority' => 2),
            array('name' => 'Kebutuhan_Pokok', 'price' => $_POST['kebutuhan_pokok'] ?? 0, 'bobot' => 2, 'priority' => 1),
        );

        // menghitung total bobot
        $total_weight = 0;
        foreach ($expenses as $expense) {
            $total_weight += $expense['bobot'];
        }
        //  sorting bagian expense

        usort($expenses, function ($a, $b) {
            return $b['priority'] - $a['priority']; 
        });

        // bagian algoritma fractional knapsack
        $selected_expenses = array();
        foreach ($expenses as $expense) {
            if ($uang_saku <= 0) {
                break;
            }
            $max_weight = min($uang_saku / ($expense['price'] ?: 1), $expense['bobot']);
            if ($max_weight <= 0) {
                continue;
             }
             $selected_expenses[] = array('name' => $expense['name'], 'price' => ($expense['price'] ?: 0), 'bobot' => $max_weight);

             $uang_saku -= $max_weight * ($expense['price'] ?: 0);
         }

         return view ('/hasil')->with(compact('uang_saku', 'simpan', 'selected_expenses'));

         //return view('hasil', compact('uang_saku', ' simpan', 'selected_expenses'));

        }

        

    
}
