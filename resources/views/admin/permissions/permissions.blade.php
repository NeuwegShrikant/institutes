<label class="form-control-label">Permission List</label>

@if( isset($role) )
    {{ Form::hidden('_id', encrypt($role)) }}
@endif

@if( isset($permissions)  && $permissions && count($permissions) )

    <div class="check-box">
        <?php $count = 24; ?>
        <ol>
            <li>
                <p class="text-primary">Masters</p>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="add_master">
                        <span class="mrgn-l-xs display-ib">Add</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="edit_master">
                        <span class="mrgn-l-xs display-ib">Edit</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="delete_master">
                        <span class="mrgn-l-xs display-ib">Delete</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="list_master">
                        <span class="mrgn-l-xs display-ib">List</span>
                    </label>
                </div>
            </li>

            <li>
                <p class="text-primary">Teachers</p>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="add_teacher">
                        <span class="mrgn-l-xs display-ib">Add</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="edit_teacher">
                        <span class="mrgn-l-xs display-ib">Edit</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="delete_teacher">
                        <span class="mrgn-l-xs display-ib">Delete</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="list_teacher">
                        <span class="mrgn-l-xs display-ib">List</span>
                    </label>
                </div>
            </li>
            <li>
                <p class="text-primary">Students</p>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="add_student">
                        <span class="mrgn-l-xs display-ib">Add</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="edit_student">
                        <span class="mrgn-l-xs display-ib">Edit</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="delete_student">
                        <span class="mrgn-l-xs display-ib">Delete</span>
                    </label>
                </div>
                <div class="">
                    <label>
                        <input type="checkbox" <?php    ?> name="permissions[]" value="list_student">
                        <span class="mrgn-l-xs display-ib">List</span>
                    </label>
                </div>
            </li>
        </ol>
    </div>
@else
    <p class="mrgn-all-none">No Menus Found</p>
@endif
