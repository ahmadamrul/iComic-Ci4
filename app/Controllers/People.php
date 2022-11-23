<?php

namespace App\Controllers;

use App\Models\PeopleModel;

class People extends BaseController
{
    protected $peopleModel;
    public function __construct()
    {
        $this->peopleModel = new PeopleModel();
    }
    public function index()
    {
        $current_page = $this->request->getVar('page_people') ? $this->request->getVar('page_people') : 1;
        // ? ternary

        // d($this->request->getVar(''));
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $people = $this->peopleModel->search($keyword);
        } else {
            $people = $this->peopleModel;
        }

        $data = [
            'title' => 'People List',
            // 'people' => $this->peopleModel->findAll()
            'people' => $people->paginate(7, 'people'),
            'pager' => $this->peopleModel->pager,
            'currentPage' => $current_page
        ];
        return view('people/index', $data);
    }
}
