<?php

// app/Services/BookService.php

namespace App\Services;

use App\Data\BookData;
use App\Data\ServiceResponseData;
use App\Models\Author;
use App\Models\Book;
use Spatie\LaravelData\Data;

final class BookService extends BaseService
{
    protected function model(): Book
    {
        return new Book;
    }

    public function storing(Data|BookData $dto): ServiceResponseData
    {
        try {
            $author = Author::firstOrCreate(['name' => $dto->author]);
            $author->books()->create($dto->toArray());

            return new ServiceResponseData('success', 'Buku berhasil disimpan!');
        } catch (\Exception $e) {
            return new ServiceResponseData('error', 'Ups, gagal menyimpan Buku!');
        }
    }
}
