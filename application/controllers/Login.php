<?php 

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');

    }

    public function index()
    {
        if ($this->session->userdata("username")) {
            redirect(base_url("home"));
        } else {
            $this->load->view('login');
        }
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("users", $where)->num_rows();
        if ($cek > 0) {

            $name = $this->m_login->resultUser("users", array("username" => $username))->row()->name;
            $data_session = array(
                'username' => $username,
                'name' => $name,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("dashboard"));

        } else {
            echo "<script>alert('Username dan password salah !')</script>";
            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}