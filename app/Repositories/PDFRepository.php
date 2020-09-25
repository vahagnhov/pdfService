<?php

namespace App\Repositories;


use App\Models\Pdf;
use App\Repositories\Interfaces\PDFRepositoryInterface;
use Carbon\Carbon;

class PDFRepository implements PDFRepositoryInterface
{
    public function searchFor($text)
    {
        //Code for search by text
        return true;
    }

    public function createOrUpdate($name, $size, $pdf)
    {
        $item = Pdf::firstOrNew(['name' => $name, 'size' => $size]);
        if ($item->exists) {
            $item->updated_at = Carbon::now();
        } else {
            $destinationPath = storage_path('app/public/upload/pdfs');
            $pdf->move($destinationPath, $name);
        }
        $item->save();
        return true;
    }
}