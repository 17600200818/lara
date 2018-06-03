<?php

namespace App\Observers;

use App\Models\Filter;
use Illuminate\Http\Request;

class FilterObserver
{
    public function saving(Filter $filter)
    {
        $filter->name = 'aaajjj';
    }
}