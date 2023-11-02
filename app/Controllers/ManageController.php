<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ManageController extends BaseController
{
    private $products;
    public function __construct()
    {
        $this->products = new \App\Models\ProductsModel;
    }
    public function index()
    {
        $data = [
            'products' => $this->products->findAll(),
        ];
        return view('adminSide/manage', $data);
    }
    public function add()
    {
        $productName = $this->request->getPost('productName');
        $category = $this->request->getPost('category');
        $details = $this->request->getPost('details');
        $price = $this->request->getPost('price');
        $availability = $this->request->getPost('availability');
        $img = $this->request->getFile('img');


        $validationRules = [
            'productName' => 'required',
            'category' => 'required',
            'details' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required',
            'img' => 'uploaded[img]|max_size[img,1024]|is_image[img]',
        ];



        if (!$validationRules) {
            return redirect()->back()->withInput()->with('error', 'Failed to upload the image.');
        }


        if ($img->isValid() && !$img->hasMoved()) {

            $newName = $img->getRandomName();


            $img->move(ROOTPATH . 'public/shop/img/product/', $newName);
            $imgname = 'shop/img/product/' . $newName;


            $data = [
                'productname' => $productName,
                'category' => $category,
                'details' => $details,
                'price' => $price,
                'availability' => $availability,
                'img' => $imgname,

            ];

            $this->products->insert($data);

            return redirect()->to('/manage')->with('success', 'Product added successfully.');
        }

        return redirect()->back()->withInput()->with('error', 'Failed to upload the image.');
    }
    public function delete($id)
    {

        $product = $this->products->find($id);

        if (!$product) {
            return redirect()->to('/manage')->with('error', 'Product not found.');
        }


        $this->products->delete($id);

        return redirect()->to('/manage')->with('success', 'Product deleted successfully.');
    }
    public function edit()
    {
        $productId = $this->request->getPost('product_id');
        $productName = $this->request->getPost('productName');
        $category = $this->request->getPost('category');
        $details = $this->request->getPost('details');
        $price = $this->request->getPost('price');
        $availability = $this->request->getPost('availability');

        $data = [
            'productname' => $productName,
            'category' => $category,
            'details' => $details,
            'price' => $price,
            'availability' => $availability,
        ];

        if ($this->request->getFile('img')) {

            if ($this->request->getFile('img')->isValid()) {

                $newImage = $this->request->getFile('img');
                $newImageName = $newImage->getRandomName();
                $newImage->move(ROOTPATH . 'public/shop/img/product/', $newImageName);

                $data['img'] = 'shop/img/product/' . $newImageName;
            }
        }

        $this->products->update($productId, $data);

        return redirect()->to('/manage')->with('success', 'Product updated successfully.');
    }
}
