<div id="profile" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Profile</h4>
            </div>
            <div class="modal-body">
                <p>{{__('messages.name')}} : {{Auth::user()->name}}</p>
                <p>{{__('messages.email')}} : {{Auth::user()->email}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="edit()">
                    {{__('messages.btn_edit')}}
                </button>
            </div>
        </div>

    </div>
</div>
