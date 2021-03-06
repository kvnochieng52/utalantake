<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioUpload;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function upload_portfolio(Request $request)
    {

        $uploadDir = $_SERVER["DOCUMENT_ROOT"] . '/portfolio_uploads';



        if (!empty($_FILES)) {
            $tmpFile = $_FILES['file']['tmp_name'];
            $file_name = time() . '_' . $_FILES['file']['name'];
            $upload_path = $uploadDir . '/' . $file_name;

            move_uploaded_file($tmpFile, $upload_path);

            echo 'portfolio_uploads/' . $file_name;

            // header('Content-type: application/json');
            // echo json_encode([
            //     //'status' => 'OK',  // Not required, but maybe useful
            //     'file_named'  => $filename,
            //     'type'  => $_FILES['file']['type'],
            // ]);
        }
    }


    public function add_portfolio(Request $request)
    {

        $portfolio = new Portfolio();
        $portfolio->user_id = Auth::user()->id;
        $portfolio->portfolio_name = $request->input('portfolio_title');
        $portfolio->portfolio_url = $request->input('portfolio_url');
        $portfolio->portfolio_description = $request->input('portfolio_description');
        $portfolio->created_by = Auth::user()->id;
        $portfolio->updated_by = Auth::user()->id;
        $portfolio->active = 1;
        $portfolio->save();




        $files = json_decode($request->input('portfolio_file'));
        $default_type = '';
        $default_url = '';
        $found_default_thumb = false;

        foreach ($files as $file) {

            if ($found_default_thumb == false) {

                $default_type = $file->type;

                if (strpos($file->type, 'video') !== false) {
                    $default_url = 'images/portfolio_place_holders/video_bg/video' . rand(1, 4) . '.jpg';
                }

                if (strpos($file->type, 'audio') !== false) {
                    $default_url = 'images/portfolio_place_holders/video_bg/video' . rand(1, 4) . '.jpg';
                }

                if (strpos($file->type, 'application') !== false) {
                    $default_url = 'images/portfolio_place_holders/file_placeholder.jpg';
                }


                if (strpos($file->type, 'image') !== false) {
                    $found_default_thumb = true;
                    $default_type = $file->type;
                    $default_url =  $file->file;
                }
            }

            PortfolioUpload::insert([
                'user_id' => Auth::user()->id,
                'portfolio_id' => $portfolio->id,
                'portfolio_type' => $file->type,
                'portfolio_upload' => $file->file,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }


        $portfolio_default_thumb_update = Portfolio::find($portfolio->id);
        $portfolio_default_thumb_update->default_thumb_type = $default_type;
        $portfolio_default_thumb_update->default_thumb_url = $default_url;
        $portfolio_default_thumb_update->updated_by = Auth::user()->id;
        $portfolio_default_thumb_update->save();


        return back()->with('success', 'Porfolio added successfully');
    }


    public function view_portfolio(Request $request)
    {

        return [
            'portfolio_details' => Portfolio::find($request->input('portfolio_id')),
            'portfolio_files' => PortfolioUpload::where('portfolio_id', $request->input('portfolio_id'))->get(),
        ];
    }
}
