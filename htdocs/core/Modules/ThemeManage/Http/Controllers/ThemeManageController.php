<?php

namespace Modules\ThemeManage\Http\Controllers;

use App\Models\Page;
use App\Models\Tenant;
use App\Models\Themes;
use Database\Seeders\Tenant\PageSeed;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ThemeManageController extends Controller
{
    const BASE_PATH = 'thememanage::tenant.backend.';

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $themes = Themes::where('status', 1)->get();
        return view(self::BASE_PATH.'index', compact('themes'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('thememanage::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('thememanage::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('thememanage::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $slug)
    {
        //Themes::where('slug', $slug)->select('id')->firstOrFail();


        DB::beginTransaction();
        try {
            $tenant = \tenant();
            Tenant::where('id',$tenant->id)->update([
                'theme_slug' => $slug
            ]);

            Tenant::where('id',$tenant->id)->get()->runForEach(function () use($slug) {
                $pages = Page::query()->whereIn('slug', [
                    'home',
                    'about',
                    'contact',
                    'shop',
                    'blog',
                ])->get();
               
                foreach ($pages as $page){
                    $page->slug = $page->slug.'_old_'.uniqid();
                    $page->status = 0;
                    $page->save();
                }
                
                session()->put('theme', $slug);

                $pageSeed = new PageSeed();
                $pageSeed->run();

                $pages = Page::query()->where('status', 1)->get();
                $menu = [];
                foreach($pages as $page){
                    $menu[] = [ 
                        "ptype" => "pages", 
                        "id" => $page->id, 
                        "antarget" => "", 
                        "icon" => "", 
                        "menulabel" => "", 
                        "pid" => $page->id 
                    ];
                }
                DB::table('menus')->where('status', 'default')->update(['status' => '', 'title'=> 'Anicen menu']);
                DB::table('menus')->insert([
                    'title' => 'Primary Menu',
                    'content' => json_encode($menu),
                    'status' => 'default',
                ]);


            });

            DB::commit();
        } catch (\Exception $exception) {


            DB::rollBack();
            dd($exception->getMessage());
        }

        return response()->json([
            'status' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
