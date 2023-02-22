<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\About;

AdminSection::registerModel(About::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->disableCreating();
    $model->disableDeleting();

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()
            ->addColumn(function () {
                return [
                    AdminFormElement::ckeditor('text', 'Основний текст')->required(),  
                ];
            })
            ->addColumn(function () {
                return [
                    AdminFormElement::text('note', 'Слоган')->required(),
                    AdminFormElement::file('video', 'Відео')->required(),
                ];
            }), 
        ]);

        $form->addBody([
            AdminFormElement::columns()
            ->addColumn(function () {
                return [
                    AdminFormElement::images('images', 'Галерея')->required(),  
                ];
            }), 
        ]);

        return $form;
    });
});