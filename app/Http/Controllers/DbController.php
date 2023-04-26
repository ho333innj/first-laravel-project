<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DbController extends Controller
{
    public function showusers()
    {
        $records = DB::table('Users')->get();
        return view ('lists.userslist' , ['users'=>$records]);
    }
    public function insertuser()
    {
        $res=   DB::table('Users')->insert([
            ['UserName'=>'hossein'  , 'FirstName'=>'hossein' ,'LastName'=>'najafi', 'Role_ID' => '4', 'Password'=>md5('123')],
            ['UserName'=>'fateme'  , 'FirstName'=>'fateme' ,'LastName'=>'safari', 'Role_ID' => '4', 'Password'=>md5('123')],
            ['UserName'=>'ziba'  , 'FirstName'=>'ziba' ,'LastName'=>'najafi', 'Role_ID' => '4', 'Password'=>md5('123')],
            ['UserName'=>'parisa'  , 'FirstName'=>'parisa' ,'LastName'=>'najafi', 'Role_ID' => '4', 'Password'=>md5('123')],
        ]);
        echo "با موفقیت اضافه شد";

    }
    public function insertadvert()
    {
        $res=   DB::table('Adverts')->insert([
            ['City_ID' => '1 ', 'Category_ID'=>'3' ,'User_ID'=>'19', 'Title'=>'ماشین', 'Describtion' => 'میفروشم', 'price'=>'200'],
            ['City_ID' => '1' , 'Category_ID'=>'3' ,'User_ID'=>'20', 'Title'=>'موتور', 'Describtion' => 'میفروشم', 'price'=>'200'],
            ['City_ID' => '1' , 'Category_ID'=>'3' ,'User_ID'=>'21', 'Title'=>'یخچال', 'Describtion' => 'میفروشم', 'price'=>'200'],
            ['City_ID' => '1' , 'Category_ID'=>'3' ,'User_ID'=>'22', 'Title'=>'تلفن', 'Describtion' => 'میفروشم', 'price'=>'200'],
            ['City_ID' => '1' ,'Category_ID'=>'3' ,'User_ID'=>'19', 'Title'=>'فرش', 'Describtion' => 'میفروشم', 'price'=>'200'],
            [ 'City_ID' => '1' ,'Category_ID'=>'3' ,'User_ID'=>'20', 'Title'=>'موکت', 'Describtion' => 'میفروشم', 'price'=>'200'],

        ]);
        echo "با موفقیت اضافه شد";

    }
    // City_ID	Category_ID	User_ID	Title	Describtion	price
}
