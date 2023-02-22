<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\Contact;

AdminSection::registerModel(Contact::class, function (ModelConfiguration $model) {

    $model->setTitle('Контакти');
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
                    AdminFormElement::text('addr', 'Адреса')->required(),  
                    AdminFormElement::text('email', 'E-mail адреса')->required(),  
                ];
            })
            ->addColumn(function () {
                return [
                    AdminFormElement::text('phone', 'Телефон')->required(),  
                    AdminFormElement::text('link', 'Посилання на Instagram')->required(),
                ];
            }), 
        ]);

        return $form;
    });
});