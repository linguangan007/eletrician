<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Product;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ProductController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Product(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->model;
            $grid->picture()->image("http://localhost/blog/public/uploads/",50,50);
            $grid->brand;
            $grid->price;
            $grid->created_at;
            $grid->updated_at->sortable();

        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Product(), function (Show $show) {
            $show->id;
            $show->model;
            $show->brand;
            $show->price;
            $show->created_at;
            $show->updated_at;


        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Product(), function (Form $form) {
            $form->display('id');
            $form->text('model')->rules("required");
            $form->text('brand');
            $form->text('price');
            $form->image('picture');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
