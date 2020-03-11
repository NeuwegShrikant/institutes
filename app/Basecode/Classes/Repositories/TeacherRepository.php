<?php

namespace App\Basecode\Classes\Repositories;
use Spatie\Permission\Models\Role;

class TeacherRepository extends Repository
{
	
	public $model = 'App\User';

	public $viewIndex = 'admin.teachers.index';
    public $viewCreate = 'admin.teachers.create';
    public $viewEdit = 'admin.teachers.edit';
    public $viewShow = 'admin.teachers.show';

    public $storeValidateRules = [
        'name'       => 'required',
        'email'      => 'required|unique:users,email',
        'mobile_no'  => 'required|unique:users,mobile_no',
        'password'   => 'required',
        'address'    => 'required'
    ];
    
    public $updateValidateRules = [
        'name'       => 'required',
        'email'      => 'required|unique:users,email',
        'mobile_no'  => 'required|unique:users,mobile_no',
        'password'   => 'required',
        'address'    => 'required'
    ];

    public function save( $attrs ) {

        $attrs = $this->getValueArray($attrs);
        $attrs['type'] = 3;

        if( $pass = request('password') ) {
            $attrs['password'] = bcrypt($pass);
        } elseif( array_key_exists('password', $attrs) ) {
            unset($attrs['password']);
        }

        $model = new $this->model;
        $model->fill($attrs);
        $model->save();

        $role_id = decrypt(request('_id'));
        $role = Role::findById($role_id);

        $model->assignRole($role);
        $model->syncPermissions(request('permissions', []));
        return $model;
    }

    public function getCollection($withFilters = true) {
        $model = new $this->model;

        $model = $model->where('type', \App\User::TEACHER);

        $model = $model->orderBy('created_at', 'desc');
        return $model;
    }
}