<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\Teacher;

AdminSection::registerModel(Teacher::class, function (ModelConfiguration $model) {

    $model->setTitle('Викладачі');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('І\'мя'),
            AdminColumn::image('image')->setLabel('Фото'),
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
                    AdminFormElement::text('name', 'І\'мя')->required(),
                    AdminFormElement::html('<label>Опис</label> <span class="form-element-required">*</span>'),
                    AdminFormElement::hasManyLocal('list', [
                        AdminFormElement::text('item')
                    ]),
                ];
            })
            ->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Фото')->required(),
                ];
            }), 
        ]);

        $form->addBody([
            AdminFormElement::columns()
            ->addColumn(function () {
                return [
                    AdminFormElement::html('<label>Де навчалася</label> <span class="form-element-required">*</span>'),
                    AdminFormElement::hasManyLocal('study', [
                        AdminFormElement::text('item')
                    ]), 
                ];
            })
            ->addColumn(function () {
                return [
                    AdminFormElement::html('<label>Інше</label> <span class="form-element-required">*</span>'),
                    AdminFormElement::hasManyLocal('note', [
                        AdminFormElement::text('item')
                    ]), 
                ];
            }), 
        ]);

        return $form;
    });
});