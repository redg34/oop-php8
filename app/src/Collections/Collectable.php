<?php
namespace App\Collections;

interface Collectable {
    public function add(Item $item): self;
    public function remove(Item $item): self;
    public function replace(Item $item): self;
}