<?php

// app/Services/AuthorService.php

namespace App\Services;

use App\Models\Author;

final class AuthorService extends BaseService
{
    protected function model(): Author
    {
        return new Author;
    }

    // public function storing(AuthorData $dto): ServiceResponseData
    // {
    //     try {
    //         Author::query()->create($dto->toArray());

    //         return new ServiceResponseData('success', 'Penulis berhasil dibuat!');
    //     } catch (\Exception $th) {
    //         report($th);

    //         return new ServiceResponseData('error', 'Ups, gagal membuat Penulis!');
    //     }
    // }

    // public function updating(AuthorData $dto, Author $model): ServiceResponseData
    // {
    //     try {
    //         $model->update($dto->toArray());

    //         return new ServiceResponseData('success', 'Penulis berhasil diperbarui');
    //     } catch (\Exception $th) {
    //         report($th);

    //         return new ServiceResponseData('error', 'Ups, gagal memperbarui Penulis!');
    //     }
    // }

    // public function deleting(Author $model): ServiceResponseData
    // {
    //     try {
    //         $model->delete();

    //         return new ServiceResponseData('success', 'Penulis berhasil diperbarui');
    //     } catch (\Exception $th) {
    //         report($th);

    //         return new ServiceResponseData('error', 'Ups, gagal memperbarui Penulis!');
    //     }
    // }
}
