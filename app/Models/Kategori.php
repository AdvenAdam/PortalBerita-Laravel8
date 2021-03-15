<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    use HasFactory;
    protected $table ='tbl_kategori';
    protected $guarded =[];
    public $timestamps =false;    

    public function getKategori($slug = false)
    {
        if ($slug == false) {
            return DB::table('tbl_kategori')->get();
        }
        return DB::table('tbl_kategori')->where('slug',$slug)->first();
    }
}
