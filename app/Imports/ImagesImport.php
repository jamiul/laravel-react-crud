<?php

namespace App\Imports;

use App\ImageUpload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ImagesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        return new ImageUpload([
            'name' => $row["name"],
            'path' => $row["path"],
        ]);
    }
}
