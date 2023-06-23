<?php

namespace App\Http\Controllers;
use App\Models\Uang;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

use Illuminate\Http\Request;

class BudgetControllerAcc extends Controller
{
    public function index(){
        return view('/uang/spendmoneyAcc');
    }

    public function hitung(Request $request){

        $request->validate([
            'price' => 'numeric|max:100000000',
            'uang_saku' => 'numeric|max:100000000'
        ], [
            'price.numeric' => 'Field harga harus berupa angka.',
            'price.max' => 'Maksimal harga adalah 100.000.000.',
            'uang_saku.numeric' => 'Field uang saku harus berupa angka.',
            'uang_saku.max' => 'Maksimal uang saku adalah 100.000.000.'
        ]);
        
        try{
        // Input nilai uang saku
        $uang_saku = $_POST['uang_saku'];

        // Pilihan uang saku yang akan disimpan
        $pilihan_simpan = $_POST['pilihan_simpan'];
        if (empty($pilihan_simpan)) {
            $simpan = 0; // Jika pilihan_simpan tidak dipilih, set simpan ke 0
        } elseif ($pilihan_simpan == '10') {
            $simpan = $uang_saku * 0.1;
        } elseif ($pilihan_simpan == '20') {
            $simpan = $uang_saku * 0.2;
        } elseif ($pilihan_simpan == '30') {
            $simpan = $uang_saku * 0.3;
        } else {
            throw new \Exception('Pilihan simpan tidak valid.'); // Melempar exception jika pilihan tidak valid
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
        //  sorting bagian expense dengan prioritas

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

         // Mendapatkan ID pengguna yang sedang login
        // $nama = DB::table('uang_saku')
        //     ->where('nama')


        $data = DB::table('uang_saku_user')
            ->select('jumlah_uang_user' , 'id')
            ->where( 'id_user', auth()->id())->orderBy('bulan', 'desc') 
            ->first(['jumlah_uang_user' , 'id']);
     
       $jumlah_uang_terakhir = $data->jumlah_uang_user;
     
        // $jumlah_uang_terakhir = floatval($jumlah_uang_terakhir); // Mengonversi ke tipe data float jika diperlukan
     
        $jumlah_uang_terakhir += $simpan;
        
       Uang::where('id', $data->id)->update(['jumlah_uang_user' => $jumlah_uang_terakhir]);

        return view('uang.hasillAcc')->with(compact('uang_saku', 'simpan', 'selected_expenses'));
        
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage()); // Kembali ke halaman sebelumnya dengan pesan kesalahan
        }


        }
        
}
