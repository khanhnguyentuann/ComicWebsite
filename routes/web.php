<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserComicController;


Route::get('/', [ComicController::class, 'index'])->name('home');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('comics/{id}', [ComicController::class, 'show'])->name('comics.show');
Route::get('comics/{id}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('comics/{id}', [ComicController::class, 'update'])->name('comics.update');
Route::delete('comics/{id}', [ComicController::class, 'destroy'])->name('comics.destroy');


Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('authors.update');//
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');

//

Route::get('/chapters', [ChapterController::class, 'index'])->name('chapter.index');
Route::get('/chapters/create', [ChapterController::class, 'create'])->name('chapter.create');
Route::post('/chapters', [ChapterController::class, 'store'])->name('chapter.store');
Route::get('/chapters/{id}', [ChapterController::class, 'show'])->name('chapter.show');
Route::get('/chapters/{id}/edit', [ChapterController::class, 'edit'])->name('chapter.edit');
Route::put('/chapters/{id}', [ChapterController::class, 'update'])->name('chapter.update');
Route::delete('/chapters/{id}', [ChapterController::class, 'destroy'])->name('chapter.destroy');

Route::get('/pages', [PageController::class, 'index'])->name('page.index');
Route::get('/pages/create', [PageController::class, 'create'])->name('page.create');
Route::post('/pages', [PageController::class, 'store'])->name('page.store');
Route::get('/pages/{id}', [PageController::class, 'show'])->name('page.show');
Route::get('/pages/{id}/edit', [PageController::class, 'edit'])->name('page.edit');
Route::put('/pages/{id}', [PageController::class, 'update'])->name('page.update');
Route::delete('/pages/{id}', [PageController::class, 'destroy'])->name('page.destroy');

Route::get('/comments', [CommentController::class, 'index'])->name('comment.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comment.create');
Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');
Route::get('/comments/{id}', [CommentController::class, 'show'])->name('comment.show');
Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('comment.edit');
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comment.update');
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');

Route::post('/ratings', [RatingController::class, 'store'])->name('rating.store');
Route::get('/ratings/{id}', [RatingController::class, 'show'])->name('rating.show');
Route::get('/ratings/{id}/edit', [RatingController::class, 'edit'])->name('rating.edit');
Route::put('/ratings/{id}', [RatingController::class, 'update'])->name('rating.update');
Route::delete('/ratings/{id}', [RatingController::class, 'destroy'])->name('rating.destroy');

Route::get('/usercomics', [UserComicController::class, 'index'])->name('usercomic.index');
Route::get('/usercomics/create', [UserComicController::class, 'create'])->name('usercomic.create');
Route::post('/usercomics', [UserComicController::class, 'store'])->name('usercomic.store');
Route::get('/usercomics/{id}', [UserComicController::class, 'show'])->name('usercomic.show');
Route::get('/usercomics/{id}/edit', [UserComicController::class, 'edit'])->name('usercomic.edit');
Route::put('/usercomics/{id}', [UserComicController::class, 'update'])->name('usercomic.update');
Route::delete('/usercomics/{id}', [UserComicController::class, 'destroy'])->name('usercomic.destroy');

