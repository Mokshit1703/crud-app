<?php

    class User extends CI_Controller{

        function index(){
            $this->load->model('User_model');
            $users = $this->User_model->all();
            $data = array();
            $data['users']= $users;
            $this->load->view('List',$data);
        }

        function Create(){
            $this->load->model('User_model');

            $this->form_validation->set_rules('name', 'Name','required');
            $this->form_validation->set_rules('email', 'Email','required|valid_email');

            if ($this->form_validation->run()== false){
                $this->load->view('Create');
            }
            else {
                //  save user to database.

                $formarray=array();
                $formarray['name']= $this->input->post('name');
                $formarray['email']= $this->input->post('email');
                $formarray['created_at']= date('y-m-d');
                $this->User_model->Create($formarray);
                $this->session->set_flashdata('success','Record added successfully!');
                redirect(base_url().'index.php/user/index');
            }
        }

        function edit($userID){
            $this->load->model('User_model');
            $user = $this->User_model->getUser($userID);
            $data = array();
            $data['user'] = $user;

            $this->form_validation->set_rules('name', 'Name','required');
            $this->form_validation->set_rules('email', 'Email','required|valid_email');
            if($this->form_validation->run() == false){
            $this->load->view('edit', $data);
            } else {
                $formarray=array();
                $formarray['name']= $this->input->post('name');
                $formarray['email']= $this->input->post('email');
                $this->User_model->updateUser($userID,$formarray);
                $this->session->set_flashdata('success','Record Updated successfully!');
                redirect(base_url().'index.php/User/index');
            }
        }

        function delete($userID)
        {
            $this->load->model('User_model');
            $user = $this->User_model->getUser($userID);
            if(empty($user)){
                $this->session->set_flashdata('failure','Record not found in database');
                redirect(base_url().'index.php/User/index');
            }

            $this->User_model->deleteUser($userID);
            $this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/User/index');
        }

    }


?>