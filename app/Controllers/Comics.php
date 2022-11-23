<?php

namespace App\Controllers;

use App\Models\ComicsModel;

class Comics extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new ComicsModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Comics List',
            'komik' => $this->komikModel->GetComics()
        ];

        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM comics");
        // foreach ($komik->getResultArray() as $e) {
        //     d($e);
        // }


        return view('comics/home', $data);
    }
    public function detail($slug)
    {
        //$komik = $this->komikModel->where(['slug' => $slug])->first();

        $data = [
            'title' => 'Comics Details',
            'komik' => $this->komikModel->GetComics($slug)
        ];

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Comic ' . $slug . ' Not Found');
        }
        return view('comics/details', $data);
    }
    public function create()
    {
        //session();
        $data = [
            'title' => 'Add Comics',
            'validation' => \Config\Services::validation()
        ];
        return view('comics/create', $data);
    }
    public function save()
    {
        if (!$this->validate(
            [
                'name' => [
                    'rules' => 'required|is_unique[comics.name]',
                    'errors' => [
                        'required' => 'Comic {field} is required ',
                        'is_unique' => 'Comic {field} already taken'
                    ]
                ],
                'cover' => [
                    'rules' =>  'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'file/cover too large',
                        'is_image' => 'plesase choose a image extension (jpg,jpeg,png)',
                        'mime_in' => 'mime plesase choose a image extension (jpg,jpeg,png)'
                    ]
                ],
                'author' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ],
                'publisher' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ],
                'pages' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ],
                'volumes' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ]
            ]
        )) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('comics/create')->withInput()->with('validation', $validation);
            return redirect()->to('comics/create')->withInput();
        }
        //get image
        $filecover = $this->request->getFile('cover');
        //cover not selected
        if ($filecover->getError() == 4) {
            $covername = 'imagenotavailable.jpg';
        } else {
            // generate random cover name
            $covername = $filecover->getRandomName();
            //move to img folder
            $filecover->move('img', $covername);
            //get image name 
            // $namecover = $filecover->getName();
        }




        $slug = url_title($this->request->getVar('name'), '-', true);
        // dd($this->request->getVar());
        $this->komikModel->save(
            [
                'name' => $this->request->getVar('name'),
                'slug' => $slug,
                'author' => $this->request->getVar('author'),
                'publisher' => $this->request->getVar('publisher'),
                'pages' => $this->request->getVar('pages'),
                'volumes' => $this->request->getVar('volumes'),
                'cover' => $covername
            ]
        );
        session()->setFlashdata('Alert', 'Comics ' . $slug . ' Added');

        return redirect()->to('/comics');
    }
    public function delete($id)
    {
        //find image by id
        $komik = $this->komikModel->find($id);
        //cek defaul image

        if ($komik['cover'] != 'imagenotavailable.jpg') {
            //delete image
            unlink('img/' . $komik['cover']);
        }


        $this->komikModel->delete($id);
        session()->setFlashdata('Alert', 'Comics "' . $komik['name'] . '" Deleted');
        return redirect()->to('/comics');
    }
    public function edit($slug)
    {
        //session();
        $data = [
            'title' => 'Edit Comics',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikModel->GetComics($slug)
        ];
        return view('comics/edit', $data);
    }

    public function update($id)
    {
        $komikLama = $this->komikModel->GetComics($this->request->getVar('slug'));

        if ($komikLama['name'] == $this->request->getVar('name')) {
            $rule_name = 'required';
        } else {
            $rule_name = 'required|is_unique[comics.name]';
        }

        if (!$this->validate(
            [
                'name' => [
                    'rules' => $rule_name,
                    'errors' => [
                        'required' => 'Comic {field} is required ',
                        'is_unique' => 'Comic {field} already taken'
                    ]
                ],
                'cover' => [
                    'rules' =>  'max_size[cover,1024]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'file/cover too large',
                        'is_image' => 'plesase choose a image extension (jpg,jpeg,png)',
                        'mime_in' => 'mime plesase choose a image extension (jpg,jpeg,png)'
                    ]
                ],
                'author' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ],
                'publisher' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ],
                'pages' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ],
                'volumes' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Comic {field} is required '
                    ]
                ]
            ]
        )) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('comics/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('comics/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileCover = $this->request->getFile('cover');

        //cek image, old image or not
        if ($fileCover->getError() == 4) {
            $coverName = $this->request->getVar('oldCover');
        } else {
            //genere random name
            $coverName = $fileCover->getRandomName();
            //move image
            $fileCover->move('img', $coverName);

            //delete old cover
            unlink('img/' . $this->request->getVar('oldCover'));
        }


        $slug = url_title($this->request->getVar('name'), '-', true);
        // dd($this->request->getVar());
        $this->komikModel->save(
            [
                'id' => $id,
                'name' => $this->request->getVar('name'),
                'slug' => $slug,
                'author' => $this->request->getVar('author'),
                'publisher' => $this->request->getVar('publisher'),
                'pages' => $this->request->getVar('pages'),
                'volumes' => $this->request->getVar('volumes'),
                'cover' => $coverName
            ]
        );
        session()->setFlashdata('Alert', 'Comics ' . $komikLama['name'] . ' Changed');

        return redirect()->to('/comics');
    }
}
