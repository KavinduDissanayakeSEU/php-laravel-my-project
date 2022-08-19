<?php

namespace domain\Services;

use App\Models\Product;
use infrastructure\Facades\ImagesFacade;

class ProductService{
    protected $item;

    public function __construct(){
        $this->item = new Product();
    }
    public function all(){
        return $this->item->all();
    }
    public function store($data){
        // dd($data);
        if(isset($data['images'])){
            $image = ImagesFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
            $this->item->create($data);
        }
        $this->item->create($data);
    }
    public function delete($item_id){
        $item = $this->item->find($item_id);
        $item->delete();
    }
    //update
    public function status($item_id){
        $item = $this->item->find($item_id);
        if($item->status==0){
            $item->status = 1;
        }else{
            $item->status = 0;
        }
        $item->update();
    }

    public function get($item_id){
        return $this->item->find($item_id);
    }

    public function update(array $data, $item_id){
        $item = $this->item->find($item_id);
        $item->update($this->edit($item, $data));
    }

    public function edit(Product $item, $data){
        return array_merge($item->toArray(), $data);
    }
    
    public function allActive(){
        return $this->item->allActive();
    }

}
