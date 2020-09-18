<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Item;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ItemController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Item(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->model;
            $grid->category;
            $grid->buytPrice("Price ($)");
            $grid->description;



            //$grid->salePrice;
            $grid->picture()->image("http://localhost/blog/public/uploads/",50,50);
            //$grid->created_at;
           // $grid->updated_at->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('description');
                $filter->like('model');
        
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
        return Show::make($id, new Item(), function (Show $show) {
            $show->id;
            $show->model;
            $show->description;
            $show->category;
            $show->buytPrice;
            $show->salePrice;
            $show->picture()->image("http://localhost/blog/public/uploads/",50,50);
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
        return Form::make(new Item(), function (Form $form) {
            $form->display('id');

            $form->text('model')->maxLength(255)->required();
            $form->text('description')->maxLength(255);
            $form->select("category")->options(config('admin.category'));
            $form->text('buytPrice')->type("number");
            $form->text('salePrice')->type("number");;
            $form->image('picture');
            $form->display('updated_at');
            $form->display('created_at');
        });
    }
}
