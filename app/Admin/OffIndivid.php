<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\OffIndivid;

AdminSection::registerModel(OffIndivid::class, function (ModelConfiguration $model) {

    $model->setTitle('Онлайн - групові');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('Назва'),
            AdminColumn::text('created_at')->setLabel('Дата створення'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()
            ->addColumn(function () {
                return [
                    AdminFormElement::text('name', 'Назва')->required(),  
                    AdminFormElement::text('age', 'Вікова категорія')->required(),  
                    AdminFormElement::text('level', 'Level')->required(),  
                    AdminFormElement::text('duration', 'Тривалість курсу')->required(), 
                ];
            })
            ->addColumn(function () {
                return [
                    AdminFormElement::html('<label>Ціни</label> <span class="form-element-required">*</span>'),
                    AdminFormElement::hasManyLocal('price', [
                        AdminFormElement::text('title', 'Назва'),
                        AdminFormElement::text('price', 'Ціна'),
                    ]),
                ];
            }), 
        ]);

        $form->addBody([
            AdminFormElement::columns()
            ->addColumn(function () {
                return [
                    AdminFormElement::ckeditor('detail', 'Детальний опис')->required(),  
                ];
            }), 
        ]);

        return $form;
    });
});