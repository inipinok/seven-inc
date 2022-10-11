<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;
    
    protected $table = 'kosts';
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    static function list_produk(){
        $data = Kost::all();
        return $data;
    }

    static function tambah_kost($title, $price){
        Kost::create([
            "title" => $title,
            "price" => $price,
        ]);
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getRoutekeyName()
    {
        return 'slug';
    }

}
