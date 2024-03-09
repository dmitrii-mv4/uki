<?php

namespace App\Http\Controllers\Admin\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\FeedbackForms;
use Illuminate\Support\Facades\View;

class FormsController extends Controller
{
    public $title_page = "Контактные формы";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {   
        $feedback_forms = FeedbackForms::paginate('10');

        // получаем данные контактной формы которую открыли
        //$feedback_form = FeedbackForms::where('form_link', $form_link)->get();

        //$feedback = Feedback::find($feedback_form[0]->id);
        //$feedback = Feedback::where('feedback_forms_id', $feedback_form[0]->id)->get();

        return view('admin/feedback/forms/index', compact('feedback_forms'));
    }

    public function create()
    {
        //$categories = Category::All();

        return view('admin/feedback/forms/create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        FeedbackForms::create($data);
        return redirect()->route('admin.feedback.forms.index');
    }

    public function edit(FeedbackForms $feedback_form)
    {
        return view('admin.feedback.forms.edit', compact('feedback_form'));
    }

    public function update(FeedbackForms $feedback_form)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);

        $feedback_form->update($data);
        return redirect()->route('admin.feedback.forms.edit', $feedback_form->id);
    }

    // public function delete()
    // {
    //     $category = Category::withTrashed()->find(2);
    //     $category->restore();        
    // }

    // public function destroy(Category $category)
    // {
    //     $category->delete();
    //     return redirect()->route('admin.articles.categories.index');
    // }
}
