<?
class mainController extends Controller
{
    
    public function index(){
        $title = 'Главная';
        View::render('main/index', compact('title'));
    }   
    
}

