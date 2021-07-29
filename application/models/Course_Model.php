<?php
class Course_Model extends CI_Model
{
    //attr
    public $tableName;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = "courses";
    }

    public function get_all()
    {
        //GET all records
        return json_encode($this->db->get($this->tableName)->result());
    }

    public function save($data = array())
    {
        //SAVE record
        return json_encode($this->db->insert($this->tableName, $data));
    }

    public function update($data = array(), $where = array())
    {
        //UPDATE record
        return json_encode($this->db->where($where)->update($this->tableName, $data));
    }

    public function delete($where = array())
    {
        //DELETE record
        return json_encode($this->db->where($where)->delete($this->tableName));
    }
}
