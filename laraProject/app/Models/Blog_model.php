<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog_model extends Model {
    
    protected $table = 'Blog';
    protected $primaryKey = 'IDBlog';
    protected $guarded = ['IDBlog'];
    public $timestamps = false;



    public function getAllBlogs() {
        $blogs = Blog_model::get();
        
        return $blogs;
    }
    
    public function getBlogsByUser(int $id) {
        $blogs = Blog_model::select(['Blog.*'])
                        ->where('IDUtente', '=', $id)->get();
        return $blogs;
    }

}