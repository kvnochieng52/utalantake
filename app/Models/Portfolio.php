<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public static function getUserPortfolio($id)
    {
        $portfolios =  self::Where('user_id', $id)
            ->get();
        foreach ($portfolios as $portfolio) {
            $portfolio->files = PortfolioUpload::where(['portfolio_id' => $portfolio->id])->get();
            // $portfolio->images_count = PortfolioUpload::where('portfolio_type', 'ilike', 'images')->count();

        }
        return $portfolios;
    }
}
