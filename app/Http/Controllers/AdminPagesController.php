<?php

namespace App\Http\Controllers;

use App\FoodPackage;
use App\PackageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use File;

class AdminPagesController extends Controller
{
    private $i;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showpackages()
    {
        $packages = FoodPackage::orderBy('id', 'desc')->get();
        return view('admin.packages.showpackages')->with('packages', $packages);
    }

    public function package_create()
    {
        return view('admin.packages.create');
    }

    public function package_list()
    {
        /*$packages = DB::table('food_packages')->where('packageType', 'premium')->get();*/
        $packages = DB::table('food_packages')->get();
        return view('admin.packages.listPackages')->with('packages', $packages);
    }



    public function package_list_update($id)
    {
        $package = FoodPackage::find($id);
        return view('admin.packages.listPackagesUpdate')->with('package', $package);
    }

    public function package_list_delete_single($id)
    {
        $package = FoodPackage::find($id);

        if(!is_null($package)){

            $packages_image = DB::table('package_images')->where('food_package_id', $package->id)->get();
            if (count($packages_image)>0){
                foreach ($packages_image as $pi){

                    $image_path = 'images/packages/' . $pi->image;  // Value is not URL but directory file path
                    if(File::exists($image_path)) {
                        File::delete($image_path);
                    }

                    $pac_im = PackageImage::find($pi->id);
                    $pac_im->delete();
                }
            }

            $package->delete();


        }
        session()->flash('success', 'The package has deleted successfully');

        return back();
    }

    public function package_list_update_single(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:50',
            'type' => 'required|max:30',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'status' => 'required|numeric',
            'type' => 'required|max:30',
        ]);


        $Package = FoodPackage::find($id);

        $Package->title = $request->title;
        $Package->packageType = $request->type;
        $Package->price = $request->price;
        $Package->discountPrice = $request->discount;
        $Package->description = $request->description;
        $Package->status = $request->status;
        /*$Package->image = str_slug($request->title);
        $Package->created_at = NULL;
        $Package->updated_at = $request->date;*/

        $Package->save();

        $packages = FoodPackage::orderBy('id', 'desc')->get();
        return view('admin.packages.listPackages')->with('packages', $packages);
    }





    public function package_store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:50',
            'type' => 'required|max:30',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'status' => 'required|numeric',
            'type' => 'required|max:30',
        ]);


        $Package = new FoodPackage();
        $Package->title = $request->title;
        $Package->packageType = $request->type;
        $Package->price = $request->price;
        $Package->discountPrice = $request->discount;
        $Package->description = $request->description;
        $Package->status = $request->status;
        $Package->image = str_slug($request->title);
        $Package->created_at = NULL;
        $Package->updated_at = $request->date;

        $Package->save();

        if (count($request->packageImage) > 0) {

            $this->i = 0;

            foreach ($request->packageImage as $image) {
                //$image = $request->file('packageImage');
                $img = time() . $this->i . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/packages/' . $img);

                Image::make($image)->resize(400, 320)->save($location);

                $package_image = new PackageImage();
                $package_image->food_package_id = $Package->id;
                $package_image->image = $img;
                $package_image->save();

                $this->i = $this->i + 1;
            }
        }

        //return view('admin.packages.create');
        return redirect()->route('admin.create');
    }

}
