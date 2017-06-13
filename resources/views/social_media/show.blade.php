<div class="row">
    <div class="title col-md-10">{{$service_name}}</div>
</div>
<div class="row">
    <div class="col-sm-3 category">Media Type</div>
    <div class="col-sm-8 item">
        {{$service_type->media_type}}
    </div>
</div><p></p>
<div class="row">
    <div class="col-sm-3 category">Audience</div>
    <div class="col-sm-8 item">
        @if($service_type->students) Students @endif
        @if($service_type->faculty_staff) Faculty/Staff @endif
        @if($service_type->community) Community @endif
        @if($service_type->alumni) Alumni @endif
    </div>
</div><p></p>
@if($service_type->media_type=="Starting New Page")
    <div class="row">
        <div class="col-sm-3 category">Page Manager</div>
        <div class="col-sm-8 item">Name:  {{$service_type->name}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Email:  {{$service_type->email}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Phone:  {{$service_type->phone}}</div>
    </div>
    <div class="row">
        <div class="col-sm-3 category"></div>
        <div class="col-sm-8 item">Department:  {{$service_type->department}}</div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Network Interest</div>
        <div class="col-sm-8 item">
            @if($service_type->facebook) Facebook @endif
            @if($service_type->twitter) Twitter @endif
            @if($service_type->instagram) Instagram @endif
            @if($service_type->youtube) YouTube @endif
        </div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">How</div>
        <div class="col-sm-8 item">
            {{$service_type->how}}
        </div>
    </div><p></p>
    <div class="row">
        <div class="col-sm-3 category">Details</div>
        <div class="col-sm-8 item">
            {{$service_type->details}}
        </div>
    </div><p></p>
@else
    @if($service_type->facebook_text)
        <div class="row">
            <div class="col-sm-3 category">Facebook Text</div>
            <div class="col-sm-8 item">
                {{$service_type->facebook_text}}
            </div>
        </div><p></p>
    @endif
    @if($service_type->twitter_text)
        <div class="row">
            <div class="col-sm-3 category">Twitter Text</div>
            <div class="col-sm-8 item">
                {{$service_type->twitter_text}}
            </div>
        </div><p></p>
    @endif
    @if($service_type->image)
        <div class="row">
            <div class="col-sm-3 category">Graphics</div>
            <div class="col-sm-8 item">
                <a href="{{$service_type->image}}">Link</a>
            </div>
        </div><p></p>
    @endif
@endif
</div>
</div>