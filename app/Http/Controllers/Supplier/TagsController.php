<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\TagsRequest;
use App\Models\Tag;
use App\Models\TagTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function index(){

        $tags = Tag::all();

        return view('supplier.tag.index',compact('tags'));
    }


    public function create()
    {
        return view('supplier.tag.create');
    }

    public function store(TagsRequest $request)
    {


        DB::beginTransaction();


        $tag = Tag::create(['slug' => $request -> slug]);


        $tag->name = $request->name;
        $tag->save();
        DB::commit();
        return redirect()->route('supplier.tag.index')->with(['success' => 'added with success']);


    }

    public function edit($id)
    {


        $tag = Tag::find($id);

        if (!$tag)
            return redirect()->route('supplier.tag.index')->with(['error' => 'this tag does not exist']);

        return view('supplier.tag.edit', compact('tag'));

    }

    public function update($id, TagsRequest  $request)
    {
        try {



            $tag = Tag::find($id);

            if (!$tag)
                return redirect()->route('supplier.tag.index')->with(['error' => 'this tag does not exist']);


            DB::beginTransaction();


            $tag->update($request->except('_token', 'id'));  // update only for slug column


            $tag->name = $request->name;
            $tag->save();

            DB::commit();
            return redirect()->route('supplier.tag.index')->with(['success' => 'updated with success']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('supplier.tag.index')->with(['error' => 'there is a problem ']);
        }

    }


    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $tags = Tag::find($id);

            if (!$tags)
                return redirect()->route('supplier.tag.index')->with(['error' => 'this tag does not exist']);

            $tagTra = TagTranslation::where('tag_id' , '=' , $id);

            $tags->delete();
            $tagTra->delete();


            DB::commit();

            return redirect()->route('supplier.tag.index')->with(['success' => 'deleted with success']);

        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->route('supplier.tag.index')->with(['error' => 'there is a problem ']);
        }
    }

}
