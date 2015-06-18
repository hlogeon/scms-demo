<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 6/18/15
 * Time: 5:32 PM
 */

namespace App\Http\Controllers;


use App\SiteContent;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\Facades\FormBuilder;

class ContentController extends Controller{


    public function index($typeO = null, $theme=null)
    {
        $models = null;
        if($typeO !== null){
           $models =  SiteContent::where('content_type_id', $typeO);
            if($theme !== null)
                $models->where('content_theme_id', $theme);
            return \View::make('content.list', [
                'models' => $models->get(),
                'type_id' => $typeO,
                'theme_id' => $theme,
            ]);
        }
        return \View::make('content.list', [
            'models' => SiteContent::all(),
            'type' => $typeO,
            'theme' => $theme,
        ]);
    }


    public function showForm($id)
    {
        /** @var SiteContent $content */
        $content = SiteContent::find($id);
        $form = \FormBuilder::create($content->content_type->form_class,
            [
                'method' => 'post',
                'url' => route('content.process_form'),
            ],
        [
            'content_id' => $content->id,
        ]
        );
        return \View::make('content.form', [
            'model' => $content,
            'form' => $form,
        ]);
    }


    public function processForm(Request $request)
    {
        $input = \Input::all();
        if(empty($input['email']))
            return redirect(route('content.form', ['id' => $input['content_id']]));
        if(empty($input['name']))
            return redirect(route('content.form', ['id' => $input['content_id']]));
        //DO nothing with form and download content
        $content = SiteContent::find($input['content_id']);
        return redirect($content->file->link());
    }


    public function view($id)
    {
        return \View::make('content.form', [
            'model' => SiteContent::find($id),
        ]);
    }

}