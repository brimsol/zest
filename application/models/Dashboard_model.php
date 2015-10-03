<?php

class Dashboard_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();

        $this->school_table = $this->config->item('TBL_SCHOOLS', 'DB_TABLES');
        $this->candidate_table = $this->config->item('TBL_CANDIDATES', 'DB_TABLES');

    }

    function get_schools_count()
    {
        $query = $this->db->select('count(school_id) as count')
            ->where('deleted', 0)
            ->get($this->school_table);
        $result = $query->first_row();
        return $result->count;
    }

    function get_candidates_count()
    {
        $query = $this->db->select('count(candidate_id) as count')
            ->where('deleted', 0)
            ->get($this->candidate_table);
        $result = $query->first_row();
        return $result->count;
    }

}
