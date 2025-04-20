<?php
namespace App\Imports;

use App\Models\Jurusan;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JurusanImport implements ToModel
{
    /**
     * Transform the row from the Excel sheet into a Siswa model instance.
     *
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Jurusan([
            'kode_jurusan' => $row[0],
            'nama_jurusan' => $row[1],
        ]);
    }
}
