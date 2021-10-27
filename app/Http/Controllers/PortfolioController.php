<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function upload_portfolio(Request $request)
    {

        $uploadDir = $_SERVER["DOCUMENT_ROOT"] . '/portfolio_uploads';

        if (!empty($_FILES)) {
            $tmpFile = $_FILES['file']['tmp_name'];
            $filename = $uploadDir . '/' . time() . '-' . $_FILES['file']['name'];

            move_uploaded_file($tmpFile, $filename);

            header('Content-type: application/json');
            echo json_encode([
                'status' => 'OK',  // Not required, but maybe useful
                'image'  => $filename,
            ]);
        }
    }
}
