<?php 

class M_dashboard extends CI_Model
{

    public function countAll()
    {
        return $this->db->count_all('task');

    }

    function count_task_done()
    {
         return $this->db->where('st_task', 3)->count_all_results('task');

    }
    function count_task_proccess()
    {
         return $this->db->where('st_task', 2)->count_all_results('task');

    }
    function count_task_open()
    {
         return $this->db->where('st_task', 1)->count_all_results('task');

    }
    function count_task_close()
    {
         return $this->db->where('st_task', 4)->count_all_results('task');

    }
    function get_before_year($before_year)
    {
        $this->db->select('COUNT(*) as jumlah');
        $this->db->from('task');
        $this->db->where('YEAR(task . tgl_post) = ' . $before_year);
        $this->db->group_by(array('YEAR(task . tgl_post)', ' MONTH(task . tgl_post)'));
        return $this->db->get()->result();
    }
    function get_current_year($current_year)
    {
        $this->db->select('COUNT(*) as jumlah');
        $this->db->from('task');
        $this->db->where('YEAR(task . tgl_post) = ' . $current_year);
        $this->db->group_by(array('YEAR(task . tgl_post)', ' MONTH(task . tgl_post)'));
        return $this->db->get()->result();
    }
}