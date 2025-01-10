<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class sekolah extends Model
{
    protected$table = "sekolahs";
    protected$primaryKey = "id";

    function handleUploadPotoSekolah()
    {
        if (request()->hasFile('foto_sekolah')) {
            $foto_sekolah = request()->file('foto_sekolah');
            $destination = "Sekolah/Poto";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto_sekolah->extension();
            $url = $foto_sekolah->storeAs($destination, $filename);
            $this->foto_sekolah = "app/" . $url;
           

        }
    }

    function handleUploadLogoSekolah()
    {
        if (request()->hasFile('logo_sekolah')) {
            $logo_sekolah = request()->file('logo_sekolah');
            $destination = "Sekolah/Logo";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $logo_sekolah->extension();
            $url = $logo_sekolah->storeAs($destination, $filename);
            $this->logo_sekolah = "app/" . $url;
            
        }
    }
}
