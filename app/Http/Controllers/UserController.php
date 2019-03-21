<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('id','desc')->paginate(10);
        return view('admin.user.index',['data'=>$users]);
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
        
        $image = $request->image;
        //$image->move('upload', $image->getClientOriginalName());

        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['mobile'] = $request->mobile;
        $data['gender'] = $request->gender;
        
        // convern status same database
        if($request->status == 'true') $data['status'] = 'on'; 
        elseif ($request->status == 'false') {
            $data['status'] = 'off';
        };

        //$data['image'] = $image->getClientOriginalName();

        $user = User::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'gender' => $data['gender'],
            'password' => bcrypt('123'),
            'status' => $data['status']

        ]);
        echo json_encode($data);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return $data;
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
        $image = $request->image;
        $image->move('upload', $image->getClientOriginalName());

        $data['code'] = $request->code;
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['quantity'] = $request->quantity;
        $data['image'] = $image->getClientOriginalName();

        $product = Product::create([
            'code' => $data['code'],
            'name' => $data['name'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'image' => $data['image']
        ]);
        $input =Product::find($id)->update($request->all());
        return response()->json(['data'=>$input],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admin/user');
    }
}
