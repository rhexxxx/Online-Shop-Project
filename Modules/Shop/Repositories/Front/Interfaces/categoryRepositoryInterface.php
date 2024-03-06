<?php 

namespace Modules\Shop\Repositories\Front\Interfaces;

interface CategoryRepositoryInterface
{
    public function findAll($option = []);
    public function findBySlug($slug);
}