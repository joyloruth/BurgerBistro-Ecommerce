<?php


class Items {
    
   private $id = 0;
   private $name = "";
   private $price = 0;
   private $category = "";
   private $photo = "";

   function __construct ($id, $name, $price, $category, $photo){
       $this->id = $id;
       $this->name = $name;
       $this->price = $price;
       $this->category = category;
       $this->photo = photo;
   }
   
   public function getId() {
       return $this->id;
   }

   public function getName() {
       return $this->name;
   }

   public function getPrice() {
       return $this->price;
   }

   public function getCategory() {
       return $this->category;
   }

   public function getPhoto() {
       return $this->photo;
   }

   public function setId($id): void {
       $this->id = $id;
   }

   public function setName($name): void {
       $this->name = $name;
   }

   public function setPrice($price): void {
       $this->price = $price;
   }

   public function setCategory($category): void {
       $this->category = $category;
   }

   public function setPhoto($photo): void {
       $this->photo = $photo;
   }


  
}
