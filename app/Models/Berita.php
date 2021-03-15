<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Kategori;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'tbl_berita';
    protected $guard =[];

public function getBerita($slug = false)
{
    if ($slug == false) {
        return DB::table('tbl_berita')->get();
    }
    return DB::table('tbl_berita')->where('slug',$slug)->first();
}

public function Kategori(): HasOne
{
    return $this->hasOne(Kategori::class, 'id', 'id_kategori');
}

}
