<?php

namespace App\Http\Controllers;
use App\logbook;
use Illuminate\Http\Request;
use Exception;
use App\Http\Requests;

class test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('Entry-page');
    }

    public function sent(Request $request)
  	{
  		try {
        $logbook = new logbook();
    		$logbook->strDeliDate = $request->DeliDate;
    		$logbook->strDeliName = $request->DeliName;
    		$logbook->strDeliDocu = $request->DeliDocu;
    		$logbook->strDeliReceivedBy = $request->DeliReceivedBy;
    		$logbook->save();
  		} catch (Exception $e) {
  		  echo $e;
  		}


  		echo "success";
  	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
