<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
public function versions()
{
    return $this->hasMany(DocumentVersion::class);
}
public function latestVersion()
{
    return $this->hasOne(DocumentVersion::class)->latest();
}

}
