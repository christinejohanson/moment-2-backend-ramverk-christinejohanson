<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snowboard;

class SnowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //returnera alla poster som finns lagrade i snow
        return Snowboard::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validera. om allt korrekt kör vidare till return.
        $request->validate([
        'name' => 'required',
        'length' => 'required',
        'gender' => 'required'
        ]);

        //posta en ny
        return Snowboard::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //för att läsa ut en snowboard med id
    public function show($id)
    {
         //lagra i variabel för att se om det finns nåt där
         $snow = Snowboard::find($id);
         if($snow != null) {
             return $snow;
             }
                 else {
                 return response()->json([
                     "Fanns ingen snowboard med det id"
                 ], 404);
             }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //läsa ut specifik snowboard med id
    public function update(Request $request, $id)
    {

        //validera. om allt korrekt körs den vidare.
        $request->validate([
        'name' => 'required',
        'length' => 'required',
        'gender' => 'required'
         ]);
         
        //lagrar i variabel först
        $snow = Snowboard::find($id);
        if($snow != null) {
            $snow->update($request->all());
            return $snow;
        } else {
            return response()->json([
                "Snowboard hittades inte"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //för att radera en specifik snowboardpost
    public function destroy($id)
    {
        //returnerar läsbart meddelande
        $snow = Snowboard::find($id);
        if($snow != null) {
            $snow->delete();
            return response()->json([
                "Snowboard raderad"
            ]);
        } else {
            return response()->json([
                "Snowboard hittades inte"
            ], 404);
        }
    }
}
