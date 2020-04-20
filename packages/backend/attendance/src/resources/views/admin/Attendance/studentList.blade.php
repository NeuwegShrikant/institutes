@if(!count($collection))

    <div class="col-12 ">
        <h5>No Record Found.</h5>
    </div>
@else
    @foreach($collection as $model)
        <div class="col-12 col-sm-2">
            <label class="kt-checkbox">
                <input type="checkbox" checked="checked" name="student_id[]" value="{{ $model->id }}"> {{ $model->name }}
                <span></span>
            </label>
        </div>
    @endforeach
@endif
