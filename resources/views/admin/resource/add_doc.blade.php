<div class="form-group row">
        <label class="col-sm-2 col-form-label">正文</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="content" id="content">{{old("content",$resource->doc->content??"")}}</textarea>
                    @error('content')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
        </div>
</div>
@section("css")
<link rel="stylesheet" href="{{asset('static/assets/styles/simditor.css')}}">
@endsection
@section("js")
<script src="{{asset('static/assets/scripts/module.js')}}"></script>
<script src="{{asset('static/assets/scripts/hotkeys.js')}}"></script>
<script src="{{asset('static/assets/scripts/uploader.js')}}"></script>
<script src="{{asset('static/assets/scripts/simditor.js')}}"></script>
<script>
$(document).ready(function(){
    var editor = new Simditor({
        textarea: $('#content'),
        upload:{
            url:'{{route("admin.resource.up")}}',
            params:{
               _token:'{{ csrf_token() }}'
            },
            fileKey:'image_file'
        },
        pasteImage:true,
    });
});

</script>
@endsection
