<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Project;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ProjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Project(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->name;
            $grid->address;
            $grid->startDate;
            $grid->finishDate;
            if($grid->status=='0') {
                $grid->status->display('Enable');
            }elseif($grid->status=='1')
            {
                $grid->status->display('Disable');
            }else{
                $grid->status->display('Unknown');
            }
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
        return Show::make($id, new Project(), function (Show $show) {
            $show->id;
            $show->name;
            $show->address;
            $show->startDate;
            $show->finishDate;
            $show->status;
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
        return Form::make(new Project(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('address');
            $form->date('startDate');
            $form->date('finishDate');
            $form->select('status')->options(['Enable','Disable']);
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
