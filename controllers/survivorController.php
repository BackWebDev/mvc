<?
require_once 'models/survivor.php';
require_once 'models/message.php';

class survivorController extends Controller
{
    
    public function index(){ 
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/');
        }
        $id = $_SESSION['user_id'];
        $survivorModel = new Survivor();
        $value = isset($_POST['value'])?$_POST['value']:'';
        $users = $survivorModel->all($id, $value);
        $title = 'Выжившие';
        View::render('survivor/index', compact('title', 'users'));
    }
    
    public function markDeath(){
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/');
        }
        $zombi_id = isset($_POST['id'])?$_POST['id']:'';
            if(isset($_POST['update'])){
                $survivorModel = new Survivor();
                $zombi = isset($_POST['zombi'])?'1':'0';
                $survivorModel->updSurv($zombi, $zombi_id);
                $this->redirect('/survivor');
            }
        $title = 'Пометить пользователя сьеденным';
        View::render('survivor/markDeath', compact('title', 'zombi_id'));
    }

    public function sendMessage(){
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/');
        }
        $recipient_id = isset($_POST['id'])?$_POST['id']:'';
        $sender_id = $_SESSION['user_id'];
        if(isset($_POST['send'])){
            $messageModel = new Message();
            $date = date("Y-m-d");
            $hour = date("H:i:s");
            $text = isset($_POST['recipient'])?$_POST['recipient']:'';
            $messageModel->sendMessage($sender_id, $recipient_id, $text, $date, $hour);
            $this->redirect('/survivor');
        }
        $title = 'Отпрвить сообщение';
        View::render('survivor/sendMessage', compact('title', 'recipient_id'));
    }

    public function viewMessage(){
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/');
        }
        $sender_id = $_SESSION['user_id'];
        $recipient_id = isset($_POST['id'])?$_POST['id']:'';
        $recipient_name = isset($_POST['name'])?$_POST['name']:'';
        $messageModel = new Message();
        $messages = $messageModel->getMessage($sender_id, $recipient_id);
        $title = 'Переписка';
        View::render('survivor/viewMessage', compact('title' , 'recipient_name', 'messages', 'sender_id'));
    }
    
}

