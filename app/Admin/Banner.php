<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\Banner;

AdminSection::registerModel(Banner::class, function (ModelConfiguration $model) {

    $model->setTitle('Банери');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('text')->setLabel('Короткий текст'),
            AdminColumn::image('image')->setLabel('Картинка'),
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
                    AdminFormElement::text('title', 'Заголовок')->required(),  
                    AdminFormElement::text('text', 'Короткий текст')->required(),  
                ];
            })
            ->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Картинка')->required(),
                ];
            }), 
        ]);

        return $form;
    });
});