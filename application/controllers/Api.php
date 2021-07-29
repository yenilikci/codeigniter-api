<?php
class Api extends CI_Controller
{
    //attr
    public $JSON_DATA;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Course_Model");
        //header set
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
        $this->output->set_content_type("application/json");
        $this->output->set_header("Access-Control-Allow-Origin: *");
        $this->output->set_header("Access-Control-Allow-Methods: GET, OPTIONS");
        $this->output->set_header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

        //json decoding and type cast array
        $this->JSON_DATA = (array)json_decode(file_get_contents("php://input"));
    }

    //GET all recordss
    public function get_all_data()
    {
        echo $this->Course_Model->get_all();
    }

    //SAVE record
    public function save()
    {
        echo $this->Course_Model->save(
            //form-encoded
            /* array(
                "title" =>  $this->input->post("title"),
                "couponCode" => $this->input->post("couponCode"),
                "price" => $this->input->post("price")
            )*/

            //json body
            $this->JSON_DATA
        );
    }

    //UPDATE record
    public function update()
    {
        $id = $this->JSON_DATA["id"];
        unset($this->JSON_DATA["id"]);

        echo $this->Course_Model->update(
            //form-encoded
            /* array(
                "title" =>  $this->input->post("title"),
                "couponCode" => $this->input->post("couponCode"),
            ),
            array(
                "id" => $this->input->post("id")
            )
            */

            //json body
            $this->JSON_DATA,
            array(
                "id" => $id
            )
        );
    }

    //DELETE record
    public function delete()
    {
        echo $this->Course_Model->delete(
            //form-encoded
            /* array(
                "id" => $this->input->post("id")
            ) 
            */
            //json-body
            $this->JSON_DATA
        );
    }
}
