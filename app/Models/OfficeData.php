<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OfficeData extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name',
        'Price',
        'Offices',
        'Tables',
        'Sqm'
    ];

    public function filter($request){
        
        $name = $request->input('name');
        //$name = null;
        $offices = $request->input('offices');
        $tables = $request->input('tables');
        $sqmMin = $request->input('sqmMin');
        $sqmMax = $request->input('sqmMax');
        $priceMin = $request->input('priceMin');
        $priceMax = $request->input('priceMax');
        $query = OfficeData::query();

        
        if($name != null)
        $query = $query->where('name', 'like', $name.'%');
        if($tables != null)
        $query = $query->where('tables',$tables);
        if($offices != null)
        $query = $query->where('offices',$offices);
        if($sqmMin!= null)
        $query = $query->where('sqm','>=',$sqmMin);
        if($sqmMax!= null)
        $query = $query->where('sqm','<=',$sqmMax);
        if($priceMin!= null)
        $query = $query->where('price','>=',$priceMin);
        if($priceMax!= null)
        $query = $query->where('price','<=',$priceMax);
        
        $users = $query->get();

        return $users;
    }
}
