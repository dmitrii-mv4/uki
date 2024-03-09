<?php

namespace App\Http\Controllers\Admin\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\FeedbackForms;
use Illuminate\Support\Facades\View;

class FeedbackController extends Controller
{
    public $title_page = "Заявки с сайта";

    public function __construct()
    {
        View::share ( 'title_page', $this->title_page );
    }

    public function index()
    {
        // Пагинация
        $feedback = Feedback::paginate('10');

        return view('admin/feedback/index', compact('feedback'));
    }

    public function views($feedback)
    {
        $feedback_item = Feedback::find($feedback);

        return view('admin/feedback/views', compact('feedback_item'));
    }

    public function edit(Feedback $feedback)
    {
        return view('admin.feedback.edit', compact('feedback'));
    }

    public function update(Feedback $feedback)
    {
        $data = request()->validate([
            'name' => '',
            'surname' => '',
            'phone' => '',
            'email' => '',
            'content' => '',
            'status' => '',
        ]);

        $feedback->update($data);
        return redirect()->route('admin.feedback.views', $feedback->id);
    }

    public function delete()
    {
        $feedback = Feedback::withTrashed()->find(2);
        $feedback->restore();        
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.feedback.index');
    }
}
