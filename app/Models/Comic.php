<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $primaryKey = 'ComicID';
    protected $fillable = [
        'ComicName',
        'Description',
        'AuthorID',
        'Genre',
        'Status',
        'UploadDate',
        'ThumbnailImage',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class, 'AuthorID', 'AuthorID');
    }
}
