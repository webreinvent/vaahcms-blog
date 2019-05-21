<?php

namespace VaahCms\Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Post;

class SetupController extends Controller
{

    //----------------------------------------------------------
    public function __construct()
    {


    }

    //----------------------------------------------------------
    public static function activate($module)
    {
        $response['status'] = 'success';
        return $response;
    }
    //----------------------------------------------------------
    public static function deactivate()
    {

        $response['status'] = 'success';
        return $response;

    }
    //----------------------------------------------------------
    public static function importSampleData()
    {

        $response['status'] = 'success';
        return $response;

    }
    //----------------------------------------------------------
    public static function delete()
    {

        $response['status'] = 'success';
        return $response;

    }
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------




}
