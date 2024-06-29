<?php

namespace App\Services;

use App\Data\ServiceResponseData;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\Data;

abstract class BaseService
{
    abstract protected function model(): Model;

    public function storing(Data $dto): ServiceResponseData
    {
        try {
            $this->model()->query()->create($dto->toArray());

            return new ServiceResponseData('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            report($e);

            return new ServiceResponseData('error', 'Ups, gagal menyimpan data!');
        }
    }

    public function updating(Data $dto, Model $model): ServiceResponseData
    {
        try {
            $model->update($dto->toArray());

            return new ServiceResponseData('success', 'Data berhasil diperbarui');
        } catch (\Exception $e) {
            report($e);

            return new ServiceResponseData('error', 'Ups, gagal memperbarui Data!');
        }
    }

    public function deleting(Model $model): ServiceResponseData
    {
        try {
            $model->delete();

            return new ServiceResponseData('success', 'Data berhasil diperbarui');
        } catch (\Exception $e) {
            report($e);

            return new ServiceResponseData('error', 'Ups, gagal memperbarui Data!');
        }
    }
}
