<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use Carbon\Carbon;

class Task extends Model
{
    protected $fillable = ['baslik','icerik'];

    public function views()
    {
        return $this->morphMany(
            View::class,'viewable'
        );
    }

    public function getViewsCount()
    {
        return $this->views()->count();
    }

    public function getViewsCountSince($sinceDateTime)
    {
        return $this->views()->where('created_at', '>', $sinceDateTime)->count();
    }

    public function getViewsCountUpto($uptoDateTime)
    {
        return $this->views()->where('created_at', '<', $uptoDateTime)->count();
    }
}
