<?php

namespace Zombata\Core\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Neuweg\Core\Repositories\Repository as Repository;
use Neuweg\Core\Permissions\Permission as Permission;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ParentBackendController extends Controller
{
    use AuthenticatesUsers;

    public $repository, $permission, $parentRepository, $parentPermission;

    public function __construct(
        $repository,
        $permission,
        $parentRepository,
        $parentPermission
    ) {

        $this->repository = $repository;
        $this->permission = $permission;

        $this->parentRepository = $parentRepository;
        $this->parentPermission = $parentPermission;

    }

    /**
     * Display a listing of the resource.
     *
     * @param $primaryId
     * @return \Illuminate\Http\Response
     */
    public function index( $primaryId ) {

        if(! $this->permission->index()) return noAuth();

        if( \request('export') == 'csv' ) {
            $this->repository->exportCsv();
        }

        $parentModel = $this->parentRepository->find($primaryId);

        $collection = $this->repository->getCollection()->where( $this->repository->primaryId, $primaryId )->paginate(15);

        return view($this->repository->viewIndex, [
            'collection'        => $collection,
            'repository'        => $this->repository,
            'permission'        => $this->permission,
            'parentRepository'  => $this->parentRepository,
            'parentPermission'  => $this->parentPermission,
            'primaryId'         => $primaryId,
            'parentModel'       => $parentModel
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $primaryId
     * @return \Illuminate\Http\Response
     */
    public function create( $primaryId ) {

        if(! $this->permission->create() ) return noAuth();;

        return view($this->repository->viewCreate, [
            'repository'        => $this->repository,
            'permission'        => $this->permission,
            'parentRepository'  => $this->parentRepository,
            'parentPermission'  => $this->parentPermission,
            'primaryId'  => $primaryId
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $primaryId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $primaryId) {

        if(! $this->permission->create() ) return noAuth();;

        $request->validate( getValidationRules($this->repository->storeValidateRules), $this->repository->storeValidateRulesMsg );

        $this->repository->save($this->repository->getAttrs());

        return $this->repository->redirectBackWithSuccess($this->repository->create_msg);

    }

    /**
     * Display the specified resource.
     *
     * @param $primaryId
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($primaryId, $id) {

        if(! $this->permission->show() ) return noAuth();;

        $model = $this->repository->find($id);

        return view($this->repository->viewShow, [
            'model'         => $model,
            'repository'        => $this->repository,
            'permission'        => $this->permission,
            'parentRepository'  => $this->parentRepository,
            'parentPermission'  => $this->parentPermission,
            'primaryId'     => $primaryId
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $primaryId
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($primaryId, $id) {

        if(! $this->permission->edit() ) return noAuth();;

        $model = $this->repository->find($id);

        return view($this->repository->viewEdit, [
            'model'         => $model,
            'repository'        => $this->repository,
            'permission'        => $this->permission,
            'parentRepository'  => $this->parentRepository,
            'parentPermission'  => $this->parentPermission,
            'primaryId'     => $primaryId
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $primaryId
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $primaryId, $id) {

        if(! $this->permission->edit() ) return noAuth();

        $model = $this->repository->find($id);

        $request->validate( getValidationRules($this->repository->updateValidateRules, $model), $this->repository->updateValidateRulesMsg );

        $this->repository->update($model);

        return $this->repository->redirectBackWithSuccess($this->repository->update_msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($primaryId, $id) {

        if(! $this->permission->destroy() ) return noAuth();

        $model = $this->repository->find($id);

        $this->repository->delete($model);

        return $this->repository->redirectBackWithSuccess($this->repository->delete_msg);

    }

}
