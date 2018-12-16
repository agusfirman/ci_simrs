<?php 

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');

    }

    public function index()
    {
        if ($this->session->userdata("username")) {
            $data["all_task"] = $this->m_dashboard->countAll();
            $data["task_done"] = $this->m_dashboard->count_task_done();
            $data["task_proccess"] = $this->m_dashboard->count_task_proccess();
            $data["task_open"] = $this->m_dashboard->count_task_open();
            $data["task_close"] = $this->m_dashboard->count_task_close();
            
            //persentase
            $data["persen_done"] =round($data["task_done"]/$data["all_task"]*100,2);
            $data["persen_proccess"]=round($data["task_proccess"]/ $data["all_task"] * 100, 2);
            $data["persen_open"]=round($data["task_open"]/ $data["all_task"] * 100, 2);
            $data["persen_close"]=round($data["task_close"]/ $data["all_task"] * 100, 2);

            $data['before_year'] = array();
            $before_year_d = date("Y") - 1;
            $current_year_d = date("Y");
            $before_year = array();
            $data['before_year'] = $this->m_dashboard->get_before_year($before_year_d );
            $data['current_year'] = $this->m_dashboard->get_current_year($current_year_d);

            // $data["before_year"] = json_encode($before_year);
            // $data["current_year"] = json_encode($current_year);

            // $this->db->select('YEAR(task . tgl_post) as tahun, MONTH(task . tgl_post) as bulan, COUNT(*) as jumlah_bulanan');
            // $this->db->from('task');
            // $this->db->where('YEAR(task . tgl_post) = '.$before_year);
            // $this->db->group_by(array('tahun', 'bulan'));
            // $list = $this->db->get()->result();

            //  $this->db->select('id_task');
            //  $this->db->from('task');
            // //  $this->db->get();
            //  $list = $this->db->get()->result();
        //    echo $data["before_year"];
        //    echo "<br/>";
        //    echo $data["current_year"];
            // foreach ($before_year as $data) {
            //     $jumlah[] = $data->jumlah;
            // }
        //    echo json_encode($jumlah);
            // echo $data["persen_done"];
            $this->load->view('_partials/head');
            $this->load->view('dashboard', $data);
            $this->load->view('_partials/footer', $data);
        } else {
            $this->load->view('login');
        }
    }

}