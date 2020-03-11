<?php

namespace App\Basecode\Classes\Repositories;

class StudentRepository extends Repository
{
	
	public $model = 'App\User';

	public $viewIndex = 'admin.students.index';
    public $viewCreate = 'admin.students.create';
    public $viewEdit = 'admin.students.edit';
    public $viewShow = 'admin.students.show';

    public $storeValidateRules = [
        'name'       => 'required',
        // 'email'      => 'required|unique:users,email',
        'mobile_no'  => 'required|unique:users,mobile_no',
        'password'   => 'required',
        'address'    => 'required'
    ];
    
    public $updateValidateRules = [
        'name'       => 'required',
        // 'email'      => 'required|unique:users,email',
        'mobile_no'  => 'required|unique:users,mobile_no',
        'password'   => 'required',
        'address'    => 'required'
    ];

    public function save( $attrs ) {

        $attrs = $this->getValueArray($attrs);
        
        $attrs['type'] = 4;
        $attrs['school_id'] = auth()->user()->id;

        if( $pass = request('password') ) {
            $attrs['password'] = bcrypt($pass);
        } elseif( array_key_exists('password', $attrs) ) {
            unset($attrs['password']);
        }

        $model = new $this->model;
        $model->fill($attrs);
        $model->save();
        return $model;
    }

    public function getCollection($withFilters = true) {
        $model = new $this->model;

        $model = $model->where('type', \App\User::STUDENT)
            ->where('school_id', auth()->user()->id);

        $model = $model->orderBy('created_at', 'desc');
        return $model;
    }
}