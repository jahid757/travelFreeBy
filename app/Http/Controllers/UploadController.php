<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Storage;



class UploadController extends Controller
{
    //
    public function index()
    {
        return view('admin.users.profile');
    }
    
    public function save(Request $request)
    {   
        
        if($imagenames = $request->file('image')) {
        $destinationPath = storage_path('app/public/profileimages/');
        $filename = time() . "." .$imagenames->getClientOriginalName();
        $imagenames->move($destinationPath, $filename);
        $file=Auth::user()->file;
        if (!empty($file)){

            Storage::delete('public/profileimages/' .$file);
        }    
        User::find(Auth::user()->id)->update(['file'=>$filename]);
        return Response()->json([
            "success" => true,
        ]);        
        }
        return Response()->json([
            "success" => false,
        ]);
    }

    public function savelogo(Request $request)
    {   
        if($imagenames = $request->file('image')) {
        $destinationPath = storage_path('app/public/logoimages/');
        $filename = time() . "." .$imagenames->getClientOriginalName();
        $imagenames->move($destinationPath, $filename);
        $file=Auth::user()->companylogo;
        if (!empty($file)){

            Storage::delete('public/logoimages/' .$file);
        }    
        User::find(Auth::user()->id)->update(['companylogo'=>$filename]);
        return Response()->json([
            "success" => true,
        ]);        
        }
        return Response()->json([
            "success" => false,
        ]);
    }

    public function userupdate(Request $request, $id)
    {   
        $user = User::findOrFail($id);
        $input = $request->all();
        $user->update($input);
        return Response()->json([
            "success" => true,
        ]);        
    
        
    }

    public function userupdatepassword(Request $request, $id)
    {   
        $validatedData = $request->validate([
            'password' => ['string', 'min:8'],
            'confirmpassword' => ['same:password'],
            'currentpassword' => ['required', function ($attribute, $value, $fail) {
                if (!\Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }]
        ]);
        if($validatedData){
            $user = User::findOrFail($id);
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
            $user->update($input);
            return Response()->json([
                "success" => true,
            ]);        
        
        }
        return response()->json(['error'=>$validator->errors()->all()]);


    }

    public function deleteMultiple(Request $request){
        $ids = $request->ids;
        User::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'message'=>"Product deleted successfully."]);
        
    }
}
