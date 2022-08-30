<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    public function createUser()
    {
        return view('admin.create-user');
    }
    public function dashboardAdmin()
    {
        $users = User::where('rol', User::ROLUSER)->get();
        $admin = User::where('rol', User::ROLADMIN)->get();
        return view('admin.dashboard', compact('users', 'admin'));
    }
    public function profileAdmin()
    {
        $users = User::where('id', auth()->user()->id)->first();
        return view('admin.profile-admin', compact('users'));
    }
    public function profileAdminUpdate(Request $request)
    {
        $request->validate([
            'name' => 'min:3|max:255',
            'username' => 'min:3|max:255|unique:users,username,' . $request->id,
            'email' => 'email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,9}$/ix|max:255|unique:users,email,' . $request->id,
            'number' => 'numeric|min:8',
            'password' => [
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ]
        ]);
        $user = User::find($request->id);
        $user->fill($request->all());
        $user->save();
        return back()->with('success', 'Personal data was updated successfully!');
    }
    public function listUsers()
    {
        $users = User::paginate(10);
        return view('admin.list-users', compact('users'));
    }
    public function bannersUsers()
    {

        return view('admin.banners-user');
    }
    public function downloadBanner($banner)
    {
        //QrCode::format('png')->generate('vishhano'.$banner,public_path() . '/qrcode.png');
       // dd('x');
        switch ($banner) {
            case '1':
                $numeroBanner='images/f1.jpg';
                $position='bottom-center';
                $padd1=200;
                $padd2=200;
                break;
            case '2':
                $numeroBanner='images/f2.jpeg';
                $position='bottom-center';
                $padd1=100;
                $padd2=300;
                break;
            case '3':
                $numeroBanner='images/f3.jpg';
                $position='bottom-center';
                $padd1=50;
                $padd2=0;
                break;
            default:
                
                break;
        }
        $ruta = route('login');
        //dd($bnr);
        $img = Image::make(Storage::disk('rutaPublic')->get($numeroBanner))->resize(648, 1152);

        QrCode::format('png')->generate($ruta, public_path() . '/qrcode.png');
        $filename = "banner-" . $banner;

        $qr = Image::make(Storage::disk('rutaPublic')->get('qrcode.png'))->resize(200, 200);
        $img->insert($qr, $position, $padd1, $padd2);
        $img->save(public_path() . '/' . $filename . '.jpg');

        //Storage::disk('rutaPublic')->delete("/banners/".$filename.".jpg");
        return Response::download(public_path() . "/" . $filename . ".jpg", 'banner.jpg');
    }
}
