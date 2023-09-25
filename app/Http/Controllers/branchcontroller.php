<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Controllers\images;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;



/**
 * Summary of branchcontroller
 */
class branchcontroller extends Controller
{
    /**
     * Summary of index
     * @return string
     */
    public function index()
    {
        return view('demo');
    }

    public function Showform(request $request)
    {   
        $foundArray= new branch;
        $url = url('/branchstore');
        $title = "Candididate_Form";
        $data = compact('url', 'title','foundArray');
        return view('branchform')->with($data);
    }

    
    public function imgpage()
    {
        return view('techno');
    }
    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
 
     */
    public function store(Request $request)
    {
       // p($request->all());
        //die;
        
        //echo "<pre>";
        //print_r($request->all());
        $branchform = new branch;
        $branchform->name = $request['name'];
        $branchform->email = $request['email'];
        $branchform->address = $request['address'];
        $branchform->gender = $request['gender'];
        $branchform->city = $request['city'];
        $branchform->country = $request['country'];
        $branchform->password = $request['password'];
        $branchform->save();

        // echo "<pre>";
        // print_r($branchform);
        // echo "</pre>";

        return redirect('/view');
    }


    /**
     * Summary of viewpage
     * //@return View
     */
    public function viewpage()
    {
        $foundArray = branch::all();

        // echo "<pre>";
        // print_r($foundArray->toarray());
        // echo "</pre>";
        $data = compact('foundArray');
        return view('branchform-view')->with($data);

        //$data=compact($Branches);
        // print_r($data);
        //return view('branchform-view')->with($data);
    }
    public function trash()
    {
        $foundArray = branch::onlyTrashed()->get();

        $data = compact('foundArray');
        return view('trash')->with($data);        
    }
    
    public function delete($id)
    {
        //delete query
        //echo $id;
        //die;
        $foundArray = branch::find($id);
        if (!is_null($foundArray))
        {
            $foundArray->delete();
        }
        return redirect('/view');
    }
    public function forcedelete($id)
    {
        $foundArray = branch::withTrashed()->find($id);
        if (!is_null($foundArray)) {
            $foundArray->forcedelete();
        }
        return redirect()->back();
    }
    public function restore($id)
    {
        $foundArray = branch::withTrashed()->find($id);
        if (!is_null($foundArray)) 
        {
            $foundArray->restore();
        }
        return redirect('/view');
    }


    public function edit($id)
    {
        // edit query
        $foundArray = branch::find($id);
        if (is_null($foundArray)) {
            return redirect('/view');
        } else {
            $title = "Update Candididate_Form";
            $url = url('/update')."/" .$id;
            $data = compact('foundArray', 'url', 'title');
            return view('branchform')->with($data);
        }
    }
    
    public function update($id, Request $request)
    {
        $branchform = branch::find($id);
        $branchform->name = $request['name'];
        $branchform->email = $request['email'];
        $branchform->address = $request['address'];
        $branchform->gender = $request['gender'];
        $branchform->city = $request['city'];
        $branchform->country = $request['country'];
        $branchform->save();
        return redirect('/view');
    }
     
}
