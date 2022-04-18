<?php

namespace App\Services;

use Carbon\Carbon;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

class Post extends DataTransferObject
{
    public string $title;
    public string $link;
    public string $image;
    public string $description;

    #[CastWith(DateCaster::class, format: 'D, d M Y H:i:s \G\M\T')]
    public Carbon $publishedAt;
}
