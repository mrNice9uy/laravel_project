<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $newsList = News::with('category')
            ->paginate(config('paginate.admin.news')
        );
        return view('admin.news.index', [
            'newsList' => $newsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        return view('admin.news.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNewsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreNewsRequest $request)
    {
        $news = News::create($request->validated());

        if($news) {
            return redirect()->route('admin.news.index')
                ->with('success', __('messages.admin.news.create.success')); // __ = trans
        }

        return  back()->withInput()->with('error', __('messages.admin.news.create.fail'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNewsRequest $request
     * @param News $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $news = $news->fill($request->validated())->save();

        if($news) {
            return redirect()->route('admin.news.index')
                ->with('success', __('messages.admin.news.update.success'));
        }

        return  back()->withInput()->with('error', __('messages.admin.news.update.fail'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, News $news)
    {
        if($request->ajax()) {
            try{
                $news->delete();
                return response()->json('ok');
            }catch (\Exception $e) {
                \Log::error($e->getMessage());
                return response()->json('error', 400);
            }
        }
    }
}
