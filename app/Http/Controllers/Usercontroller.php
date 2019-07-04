<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::all()->toArray();                   //use to array
      return view('user.index',compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // สร้างข้อมูลก้อนใหม่ที่จะเอาบันทึกในตาราง
     // เป็นการ show ตำแหน่ง
    public function create()
    {
        return view('user.create'); //ทำการสร้างก้อนข้อมูลไปยัง view('user.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     // ใช้ในการบันทึกข้อมูล
     // ตรวจสอบข้อมูลที่ถูกส่ง
    public function store(Request $request)
    {
        $this->validate($request,['fname' => 'required','lname' => 'required']);
        $user = new User(
          [
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname')
          ]
        );
        $user -> save();
        return redirect()->route('user.index')->with('success','บันทึกข้อมูลเรียบร้อย');
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
        $user = User::find($id);
        //dd($id);
        return view('user.edit',compact('user','id'));
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
      $this->validate($request,
        ['fname' => 'required',
         'lname' => 'required'
        ]
      );
      $user = User::find($id);
      $user->fname = $request->get('fname');
      $user->lname = $request->get('lname');
      $user->save();
      return redirect()->route('user.index')->with('success','successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);    // ทำการค้น id
        $user->delete();          // ทำการลบ
        return redirect()->route('user.index') ->with('success','ลบข้อมูลเรียบร้อย');    // ส่งค่ากลับไป ว่า ลบเรียบร้อย

      //  dd($id);
    }
}
