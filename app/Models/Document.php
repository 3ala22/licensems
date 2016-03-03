<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Document extends Model
{
    protected $fillable = ['path', 'name', 'extension'];

    protected $baseDir = 'upload/';

    public static function fromFile(UploadedFile $file, $path)
    {
        $filename = time() . '_' . $file->getClientOriginalName();

        $document = new static([
            "name" => $file->getClientOriginalName(),
            "extension" => $file->getClientOriginalExtension()
        ]);

        $document->path = $document->baseDir . $path . $filename;

        $file->move($document->baseDir . $path, $filename);

        return $document;
    }

    public function license()
    {
        return $this->belongsTo('App\Models\License');
    }
}
