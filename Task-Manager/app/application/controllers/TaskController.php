<?php
require_once 'BaseController.php';

require_once __DIR__ . DIRECTORY_SEPARATOR .'../models/TaskModel.php';

class TaskController extends BaseController
{


    public function index(){
        $data['tasks']=(new TaskModel())->getTask();
        $data['completeTasks']=(new TaskModel())->getCompleteTask();
        $this->view('task_home',$data);
//        $this->view('dashboard');
    }

    public function storeTask(){
        if ((new TaskModel())->storeProcess()){
            $_SESSION['success'] = 'Task Inserted or Updated Successfully!!';
            $redirect=url('task','index');
            return header('Location:'.$redirect);
        }
        $_SESSION['error']='Something went wrong';
        $redirect=url('task','index');
        return header('Location:'.$redirect);

    }

}