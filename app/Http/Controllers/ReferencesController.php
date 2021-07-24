<?php

namespace App\Http\Controllers;

use App\Models\References;
use Carbon\Traits\Creator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Validator,Session;

class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('references.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('references.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $attribute = array(
                'ad' => 'Ad',
            );

            $rules = array(
                'ad' => 'required',
            );

            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($attribute);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $references      = new References;
            $references->ad  = $request->get('ad');
            $references->save();

            Session::flash('message', array('Başarılı!','Referans kaydedildi.', 'success'));

        }
        catch (\Exception $e)
        {
            Session::flash('message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'error'));
        }

        return redirect()->route('references.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\References  $references
     * @return \Illuminate\Http\Response
     */
    public function show(References $references)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\References  $references
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $references = References::find($id);
        return view('references.edit',compact('references'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\References  $references
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try
        {
            $attribute = array(
                'ad' => 'Ad',
            );

            $rules = array(
                'ad' => 'required',
            );

            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($attribute);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $references      = References::find($id);
            $references->ad  = $request->get('ad');
            $references->save();

            Session::flash('message', array('Başarılı!','Referans kaydedildi.', 'success'));

        }
        catch (\Exception $e)
        {
            Session::flash('message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'error'));
        }

        return redirect()->route('references.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\References  $references
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $references = References::find($id);
            $references->delete();

            session()->flash('flash_message', array('Başarılı!','Referans silindi.', 'success'));
        }

        catch (\Exception $e){

            session()->flash('flash_message', array('Başarısız!','Hata! Lütfen tekrar deneyiniz.', 'error'));

        }

        return redirect()->route('references.index');
    }

    public function datatable()
    {
        return Datatables::of(References::get())
            ->editColumn('created_at', function ($references) {
                return $references->updated_at ? with(new Carbon($references->updated_at))->format('d-m-Y') : '';
            })
            ->addColumn('actions', function ($references) {
                $actions  = '<a  href="'.route('references.edit',$references->id).'" class="inline-flex items-center px-1 py-1 bg-blue-800 mr-2 border border-transparent rounded-md font-normal text-xs text-white uppercase tracking-widest hover:bg-blue-700 hover:text-white active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 disabled:opacity-25 transition"><span class="material-icons" style="font-size: 18px">edit</span></a>';
                $actions .= '<a onclick="return confirm(\' '.$references->ad.' isimli referansı silmek istediğinize emin misiniz? \')" href="'.route('reference.destroy',$references->id).'" class="inline-flex items-center px-1 py-1 bg-red-800 border border-transparent rounded-md font-normal text-xs text-white uppercase tracking-widest hover:bg-red-700 hover:text-white active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition"><span class="material-icons" style="font-size: 18px">delete</span></a>';
                return $actions;
            })
            ->rawColumns(['actions'])
            ->toJson();
    }
}
