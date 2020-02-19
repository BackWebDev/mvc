<?
require_once 'models/user.php';
class userController extends Controller
{

        public function index(){
            if(!isset($_SESSION['user_id'])){
                $this->redirect('/');
            }
        }   
        public function register(){
            if($_POST){    
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password = md5($password);
                $name = $_POST['name'];
                $sname = $_POST['sname'];
                $hb = $_POST['hb'];
                $contact = $_POST['contact'];
                $location = $_POST['location'];
                $addinfo = $_POST['addinfo'];
                $userModel = new User();
                if( $userModel->checkEmail($email) ){
                    Message::set('danger', 'Пользователь с таким email уже зареестрирован!');
                    $this->redirect('/user/register');
                }

                $userModel->addUser($email, $password, $name, $sname, $hb, $location, $contact, $addinfo);
                 Message::set('success', 'Пользователь успешно зарегистрирован!');
                 $this->redirect('/user/login');
            }

            $title = 'Register';
            View::render('user/register', compact('title'));
        }

        public function login(){
            if($_POST){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password = md5($password);
                $userModel = new User();
                $user = $userModel->checkUser($email, $password);
                if( !$user ){
                    Message::set('danger', 'Неверный логин или пароль');
                    $this->redirect('/user/login');
                }
                    $id = $user->id;
                    $date = date("Y-m-d H:i:s");
                    $userModel->addCurrentTime($id, $date);
                    Session::set('user_id', "$user->id");
                    $this->redirect('/');
            }
            $title = 'Login';
            View::render('user/login', compact('title'));
        }


        public function exit(){
            Session::delete('user_id');
            $this->redirect('/');
        }

}