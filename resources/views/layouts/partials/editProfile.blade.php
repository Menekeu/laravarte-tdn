<div id="editProfile" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{__('messages.editProfile')}}</h4>
            </div>
            <div class="modal-body">

                <form action="{{route('edit')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('editName')? 'has-error':''}}">
                        <label for="editName" class="control-label">{{__('messages.name')}}</label>
                        <input type="text" class="form-control" id="editName" name="editName"
                               required="required" value="{{old('editName')?old('editName'):Auth::user()->name}}">

                        {!! $errors->first('editName','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{$errors->has('editEmail')? 'has-error':''}}">
                        <label for="editEmail" class="control-label">{{__('messages.email')}}</label>
                        <input type="email" class="form-control" id="editEmail" name="editEmail"
                               required="required" value="{{old('editEmail')?old('editEmail'):Auth::user()->email}}">

                        {!! $errors->first('editEmail','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{$errors->has('editImage')? 'has-error':''}}">
                        <label for="editImage" class="control-label">{{__('messages.image')}}</label>
                        <input type="file" value="{{old('editImage')?old('editImage'):Auth::user()->profile}}" id="editImage" name="editImage">

                        {!! $errors->first('editImage','<span class="help-block">:message</span>') !!}
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        {{__('messages.btn_edit')}} &raquo;
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
