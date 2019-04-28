<?php
<?php
class Sodium{
    static function createMetabox():Sodium{}
    function addColumn($width):Sodium{}
    function addFields(FieldInterface ...$fields):Sodium{}
}

class FieldFactory{
    static function createTextField(): FieldInterface  {}
    static function createRadio(): FieldInterface  {}
    static function createCheckbox(): FieldInterface  {}
    static function createCheckboxGroup():AbstractFieldGroup  {}
}

class TextField extends AbstractField{

}
class Radio extends AbstractField{

}

class Checkbox extends AbstractField{

}

class CheckboxGroup extends AbstractFieldGroup{

}

class AbstractFieldGroup implements FieldGroup{
    function add(FieldInterface ...$field):AbstractFieldGroup{}
}

class AbstractField implements FieldInterface{
    function setLabel():FieldInterface{}
    function setID():FieldInterface{}
    function setDefault():FieldInterface{}
    static function create():FieldInterface{}
}

interface FieldInterface{
    static function create():FieldInterface;
    function setLabel():FieldInterface;
    function setID():FieldInterface;
    function setDefault():FieldInterface;
}
interface FieldGroup{
    function add(FieldInterface ...$field);
}

Sodium::createMetabox()->addColumn()->addFields([
    FieldFactory::createTextField()->setDefault()->setLabel()->setID(),
    FieldFactory::createRadio()->setLabel()->setDefault()->setID(),
    FieldFactory::createCheckbox()->setLabel()->setID(),
    FieldFactory::createCheckboxGroup()->add(
        FieldFactory::createCheckbox(),
        FieldFactory::createCheckbox()
    )
])->addColumn(30)->addFields([
    FieldFactory::createTextField()->setDefault()->setLabel()->setID(),
    FieldFactory::createRadio()->setLabel()->setDefault()->setID(),
    FieldFactory::createCheckbox()->setLabel()->setID(),
])

;

Sodium::createMetabox()->addColumn()->addFields([
    TextField::create()->setLabel(),
    Checkbox::create()->setID()->setLabel()->setDefault(),
    Checkbox::create()->setID()->setDefault()
]);

Sodium::
