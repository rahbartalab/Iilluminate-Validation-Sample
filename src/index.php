<?php


require_once '../vendor/autoload.php';


$dataToValidate = ['title' => 'Some title' , 'body' => 'this-is-body'];

$rules = [
    'title' => ['required', 'string', 'min:4'],
    'body' => 'required|string|min:20|max:40'
];

$messages = [
    'required' => 'The :attribute field is required.',
    'min' => 'the min length is :min'
];

$validator = getValidator($dataToValidate, $rules, $messages);


if ($validator->fails()) {
    $errors = $validator->errors();
    foreach ($errors->all() as $message) {
        var_dump($message);
    }
}