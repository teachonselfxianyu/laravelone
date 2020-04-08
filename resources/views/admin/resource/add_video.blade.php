<div class="form-group row">
        <label class="col-sm-2 col-form-label">视频ID</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="ali_id" value='{{old("ali_id",$resource->video->ali_id??"")}}'>
                    @error('ali_id')
                    <small class="form-text text-danger">请填写阿里云视频点播功能的视频id</small>
                    @enderror
        </div>
    </div>