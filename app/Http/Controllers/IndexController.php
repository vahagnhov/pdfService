<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\PDFRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Session;
use Validator;

class IndexController extends Controller
{
    private $pdfService;
    private $userService;

    public function __construct(PDFRepositoryInterface $pdfService, UserRepositoryInterface $userService)
    {
        $this->pdfService = $pdfService;
        $this->userService = $userService;
    }

    /**
     * Get all users who is associated with companies in a given country
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = 'Canada';
        $users = $this->userService->usersAssociatedWithCompanies($country);
        return view('index', compact('users'));
    }

    /**
     * Upload PDF.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function uploadPDF(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,
            [
                'pdf' => 'required'
            ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $extension = $request->pdf->getClientOriginalExtension();
            $name = $request->pdf->getClientOriginalName();
            $size = $request->pdf->getSize();

            if ($extension == 'pdf') {
                $word = 'Proposal';

                $pdfSearchContain = $this->pdfService->searchFor($word);

                if ($pdfSearchContain) {
                    $this->pdfService->createOrUpdate($name, $size, $request->pdf);
                    Session::flash('success', 'PDF file Successfully Uploaded');
                    return redirect()->back();
                }

            } else {
                return response()->json([
                    'errors' => 'The Uploaded File is not PDF',
                ], 422);
            }
        }
    }
}
