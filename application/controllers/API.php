<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('book_model');
    }

    //API - client sends isbn and on valid isbn book information is sent back
    public function bookByIsbn_get()
    {

        $isbn = $this->input->get('isbn');

        if (!$isbn) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output("No ISBN specified");

            // $this->response("No ISBN specified", 400);
            // echo "not ISBN";

            exit;
        }

        $result = $this->book_model->getbookbyisbn($isbn);

        if ($result) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($result));

            exit;
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(404)
                ->set_output("Invalid ISBN");

            // $this->response("Invalid ISBN", 404);

            exit;
        }
    }

    //API -  Fetch All books
    public function books_get()
    {

        $result = $this->book_model->getallbooks();

        if ($result) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($result));

            // $this->response($result, 200);

        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(404)
                ->set_output("No record found");

            // $this->response("No record found", 404);

        }
    }

    //API - create a new book item in database.
    public function addBook_post()
    {
        // print_r($this->input->get());

        // exit;

        $name = $this->input->get('name');

        $price = $this->input->get('price');

        $author = $this->input->get('author');

        $category = $this->input->get('category');

        $language = $this->input->get('language');

        $isbn = $this->input->get('isbn');

        $pub_date = $this->input->get('publish_date');

        if (!$name || !$price || !$author || !$price || !$isbn || !$category) {

            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output("Enter complete book information to save");

            // $this->response("Enter complete book information to save", 400);

        } else {

            $result = $this->book_model->add(array("name" => $name, "price" => $price, "author" => $author, "category" => $category, "language" => $language, "isbn" => $isbn, "publish_date" => $pub_date));

            if ($result === false) {

                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(404)
                    ->set_output("Book Information could not be saved. Tray anain.");

                // $this->response("Book information could not be saved. Try again.", 404);

            } else {

                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output("Success");

                // $this->response("success", 200);

            }

        }

    }

    //API - update a book
    public function updateBook_put()
    {

        $name = $this->input->get('name');

        $price = $this->input->get('price');

        $author = $this->input->get('author');

        $category = $this->input->get('category');

        $language = $this->input->get('language');

        $isbn = $this->input->get('isbn');

        $pub_date = $this->input->get('publish_date');

        $id = $this->input->get('id');

        if (!$name || !$price || !$author || !$price || !$isbn || !$category) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output("Enter complete book information to save");

            // $this->response("Enter complete book information to save", 400);

        } else {
            $result = $this->book_model->update($id, array("name" => $name, "price" => $price, "author" => $author, "category" => $category, "language" => $language, "isbn" => $isbn, "publish_date" => $pub_date));

            if ($result === false) {

                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(404)
                    ->set_output("Book Information could not be saved. Tray anain");

                // $this->response("Book information coild not be saved. Try again.", 404);

            } else {

                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output("Success");

                // $this->response("success", 200);

            }

        }

    }

    //API - delete a book
    public function deleteBook_delete()
    {

        $id = $this->input->get('id');

        // echo $id;

        // exit;

        if (!$id) {

            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(404)
                ->set_output("Parameter missing");

            // $this->response("Parameter missing", 404);

        }

        if ($this->book_model->delete($id)) {

            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output("Success");

            // $this->response("Success", 200);

        } else {

            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output("Failed");

            // $this->response("Failed", 400);

        }

    }

}
