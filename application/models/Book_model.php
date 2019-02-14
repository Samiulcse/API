<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model
{

    public function __construct()
    {

        $this->load->database();

    }

    //API call - get a book record by isbn
    public function getbookbyisbn($isbn)
    {

        $this->db->select('id, name, price, author, category, language, ISBN, publish_date');

        $this->db->from('tbl_books');

        $this->db->where('ISBN', $isbn);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {

            return $query->result_array();

        } else {

            return 0;

        }

    }

    //API call - get all books record
    public function getallbooks()
    {

        $this->db->select('id, name, price, author, category, language, ISBN, publish_date');

        $this->db->from('tbl_books');

        $this->db->order_by("id", "desc");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return 0;

        }

    }

    //API call - delete a book record
    public function delete($id)
    {

        // $this->db->where('id', $id);

        if ($this->is_id_avil($id) ? $this->db->where('id', $id)->delete('tbl_books') : false) {

            return true;

        } else {

            return false;

        }

    }

    // Is deletion id available

    public function is_id_avil($id)
    {
        $this->db->select('id');

        $this->db->from('tbl_books');

        $this->db->where('id', $id);

        $query = $this->db->get();

        $result = $query->result();

        if (isset($result[0]->id)) {
            return true;
        } else {
            return false;
        }

    }

    //API call - add new book record
    public function add($data)
    {

        if ($this->db->insert('tbl_books', $data)) {

            return true;

        } else {

            return false;

        }

    }

    //API call - update a book record
    public function update($id, $data)
    {
        
        // $this->db->where('id', $id);

        if ( $this->is_id_avil($id) ? $this->db->where('id', $id)->update('tbl_books', $data) : false) {
            // echo $this->db->last_query();

            return true;

        } else {

            return false;

        }

    }

}
