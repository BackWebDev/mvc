<?php
require_once 'models/profile.php';

class profileController extends Controller
{

    public function index(){
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/');
        }
        if($_POST){
            $this->redirect('/profile/edit');
        }
        $title = 'Профиль';
        $id = $_SESSION['user_id'];
        $profileModel = new Profile();
        $contents = $profileModel->fullInfo($id);
        View::render('profile/index', compact('title', 'contents'));
    }
    
    public function edit(){
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/');
        }
        $profileModel = new Profile();
        $id = $_SESSION['user_id'];
        if($_POST){
            $name = $_POST['name'];
            $sname = $_POST['sname'];
            $hb = $_POST['hb'];
            $contact = $_POST['contact'];
            $location = $_POST['location'];
            $addinfo = $_POST['addinfo'];
            $profileModel->updateProfile($id, $name, $sname, $hb, $contact, $location, $addinfo);
            $this->redirect('/profile');
        }
        $title = 'Редактирование профиля';
        $contents = $profileModel->fullInfo($id);
        View::render('profile/edit', compact('title', 'contents'));
    }
    
}