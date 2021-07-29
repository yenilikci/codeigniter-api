<?php
class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Course_Model");
    }

    //GET all recordss
    public function get_all_data()
    {
        echo $this->Course_Model->get_all();
    }

    //SAVE record
    public function save()
    {
        $this->Course_Model->save(
            array(
                "title" =>  $this->input->post("title"),
                "couponCode" => $this->input->post("couponCode"),
                "price" => $this->input->post("price")
            )
        );
    }

    //UPDATE record
    public function update()
    {
        $this->Course_Model->update(
            array(
                "title" =>  $this->input->post("title"),
                "couponCode" => $this->input->post("couponCode"),
            ),
            array(
                "id" => $this->input->post("id")
            )
        );
    }

    //DELETE record
    public function delete()
    {
        $this->Course_Model->delete(
            array(
                "id" => $this->input->post("id")
            )
        );
    }
}
