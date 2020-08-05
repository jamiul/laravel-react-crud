<?php

namespace App\Exports;

use App\ImageUpload;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImagesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ImageUpload::all();
    }
}
