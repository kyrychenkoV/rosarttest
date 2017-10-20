<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    const PATH_TO_IMAGE = 'frontend/img/';
    const FILTER_NEWEST = 1;
    const FILTER_ASC_CURRENCY = 2;
    const FILTER_DESC_CURRENCY = 3;
    const FILTER_NAME_ASC = 4;
    const FILTER_NAME_DESC = 5;
    const SHOW_COUNT_PRODUCTS_IN_PAGE = 6;

    public function master()
    {
        return $this->belongsTo('App\Models\Master');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function technique()
    {
        return $this->belongsTo('App\Models\Technique');
    }

    static function getProductsItem($filters)
    {
        $query = self::onWriteConnection();
        if (isset($filters['minprice']) && isset($filters['maxprice'])) {
            $query->whereBetween('currency', [(int)$filters['minprice'], (int)$filters['maxprice']]);
        }
        if (isset($filters['categories'])) {
            $query->whereIn('category_id', $filters['categories']);
        }
        if (isset($filters['masters'])) {
            $query->whereIn('master_id', $filters['masters']);
        }
        if (isset($filters['techniques'])) {
            $query->whereIn('technique_id', $filters['techniques']);
        }
        if (isset($filters['filter'])) {
            switch ($filters['filter']) {
                case self::FILTER_NEWEST:
                    $query->orderBy('created_at', 'desc');
                    break;
                case self::FILTER_ASC_CURRENCY:
                    $query->orderBy('currency', 'asc');
                    break;
                case self::FILTER_DESC_CURRENCY:
                    $query->orderBy('currency', 'desc');
                    break;
                case self::FILTER_NAME_ASC:
                    $query->orderBy('title', 'asc');
                    break;
                case self::FILTER_NAME_DESC:
                    $query->orderBy('title', 'desc');
                    break;
            }
        }
        $query->with('master')
            ->with('category')
            ->with('technique');
        $result = $query->paginate(self::SHOW_COUNT_PRODUCTS_IN_PAGE);
        $result->setPath('categories');
        $result->appends($filters);

        return $result;
    }
}
