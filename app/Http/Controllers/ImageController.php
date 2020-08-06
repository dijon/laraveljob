<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        $categories = DB::table('categories')->get();
        $users = DB::table('users')->get();

        $where = [];
        if ($request->has('category')) {
            $where['category_id'] = $request->get('category');
        }

        if ($request->has('user')) {
            $where['user_id'] = $request->get('user');
        }

        $images = DB::table('images')->where($where)->paginate(6);

        return view('images.index', [
            'images' => $images,
            'categories' => $categories,
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $image = DB::table('images')->where('id', $id)->get();

        return view('images.show', ['image' => $image]);
    }

    public function create()
    {
        $categories = DB::table('categories')->get();

        return view('images.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:2000',
                'title' => 'required',
                'description' => 'required',
            ]);

            $file = $request->file('image');

            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'img-' . time() . '.' . $file->getClientOriginalExtension();

            // save to storage/app/photos as the new $filename
            $path = $file->storeAs('images', $filename);

            DB::table('images')->insert([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'name' => $path,
                'user_id' => Auth::id(),
                'category_id' => $request->get('category'),
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ]);

            \request()->session()->flash('success', 'Изображението е качено успешно!');
        } catch (\Exception $exception) {
            \request()->session()->flash('error', 'Грешно попълнена форма!');
        }

        // echo public path to the file
        //$otherPath = asset('storage/'.$path);

        //print_r(['filesystem_path' => $path, 'public_path' => $otherPath]);
        return back();
    }
}
