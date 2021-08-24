<!-- service--->
<div class="container-fluid">
    <div class="row my-4">
        <div class="col-md-12">
            <div class="col-md-4 text-center">
                <div class="sidebar sticky-top" >
                    @foreach ($data as $info )
                        <a href="#{{ $info->id }}">{{ $info->ServiceName }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8">
                @foreach ($data as $info )
                <div class="text-service" id="{{ $info->id }}">{!!$info->ServiceDesc!!}</div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<!-- service-->