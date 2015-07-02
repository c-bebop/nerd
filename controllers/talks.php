<?php

class Talks extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel('talk');
    }

    public function index() {
        $data['title'] = 'NERD';
        $data['talks'] = $this->_model->all();

        $this->_view->render('header', $data);
        $this->_view->render('talks/list', $data);
        $this->_view->render('footer');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            User::login($_POST['password']);

            if (!User::is_logged_in()) {
                Message::set('Password falsch', 'danger');
                URL::redirect('talks/login/?redirected');
            }
            URL::redirect();
        }
        else if (!User::is_logged_in() || isset($_GET['redirected'])) {
            $data['title'] = 'Login';
            $this->_view->render('login', $data);
        }
        else {
            URL::redirect();
        }
    }

    public function add() {
        $data['title'] = 'New Talk';
        $data['form_header'] = 'Add a new Talk';

        $this->_view->render('header', $data);
        $this->_view->render('talks/form', $data);
        $this->_view->render('footer');
    }

    public function insert() {

        if (!isset($_POST)) {
            URL::halt('No Post args!');
        }

        if (!(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['host']) && isset($_POST['url']) && isset($_POST['image']))) {
            URL::halt('Some Post args are not there!');
        }

        $data['title'] = filter_var(($_POST['title']), FILTER_SANITIZE_STRING);
        $data['url'] = filter_var($_POST['url'], FILTER_SANITIZE_URL);
        $data['image'] = filter_var($_POST['image'], FILTER_SANITIZE_URL);
        $data['votes'] = 0;
        $data['host'] = filter_var($_POST['host'], FILTER_SANITIZE_STRING);
        $data['description'] = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

        if (strlen($data['title']) <= 2 || strlen($data['host']) <= 2 || strlen($data['description']) <= 9) {
            Message::set('One or more fields are not properly filled!', 'danger');
        } else if (isset($_POST['id'])) {
            $data['id'] = filter_var(($_POST['id']), FILTER_VALIDATE_INT);
            $this->_model->update_talk($data);
            Message::set('The Talk has successfully been edited!');
        } else {
            $this->_model->insert('talks', $data);
            Message::set('The Talk has successfully been created!');
        }

        URL::redirect('', 303);
    }

    public function delete($id) {

        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($this->_model->delete_talk($id) !== 1) {
            Message::set('The Talk could not be deleted!', 'danger');
        } else {
            Message::set('The Talk has been successfully deleted!');
        }

        URL::redirect('', 303);
    }

    public function edit($id) {
        $data['title'] = 'Edit Talk';
        $data['form_header'] = 'Edit Talk';

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $data['talk'] = $this->_model->get_talk($id);

        $this->_view->render('header', $data);
        $this->_view->render('talks/form', $data);
        $this->_view->render('footer');
    }

    public function vote($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        if ($this->_model->increase($id)) {
            Message::set('Thanks for your participation.');
        } else {
            Message::set('I\'m sorry, Dave. I\'m afraid I can\'t do that.', 'danger');
        }

        URL::redirect('');
    }

    public function search() {

        if (strlen($_GET['q']) === 0) {
            URL::redirect('', 303);
        }

        $search_query = filter_var($_GET['q'], FILTER_SANITIZE_STRING);

        if (sizeof($search_query) === 0) {
            Message::set('Search query could not be executed caused by your input!', 'danger');
            URL::redirect('', 303);
        }

        $data['talks'] = $this->_model->search($search_query);

        if (sizeof($data['talks']) === 0) {
            Message::set('Your search query had no results.', 'warning');
            URL::redirect('', 303);
        }

        $result_count = sizeof($data['talks']);

        //Something i always feel annoyed when reading otherwise
        $result_string = $result_count === 1 ? 'result' : 'results';
        Message::set($result_count . ' ' . $result_string . ' for: ' . $search_query);

        $data['title'] = 'Talk search';
        $this->_view->render('header', $data);
        $this->_view->render('talks/list', $data);
        $this->_view->render('footer');

    }

}