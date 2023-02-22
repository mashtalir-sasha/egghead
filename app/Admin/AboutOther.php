<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\AboutOther;

AdminSection::registerModel(AboutOther::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас (інше)');
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
                    AdminFormElement::text('title1', 'Заголовок 1')->required(),  
                    AdminFormElement::ckeditor('text1', 'Текст 1')->required(),  
                ];
            })
            ->addColumn(function () {
                return [
                    AdminFormElement::text('title2', 'Заголовок 2')->required(),  
                    AdminFormElement::ckeditor('text2', 'Текст 2')->required(),
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