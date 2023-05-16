<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'authors';

    // Tên cột khóa chính
    protected $primaryKey = 'AuthorID';

    // Các cột được phép gán dữ liệu
    protected $fillable = ['AuthorName'];
}
