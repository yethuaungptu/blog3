<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="title">Title <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" name="title" id="title" value="{{ old('title')?? $post->title?? ''}}">
    </div>
    <div class="col-lg-4"></div>
<div class="text-danger">{{ $errors->first('title')}}</div>
</div>
<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="content">Content <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="text" class="form-control" name="content" id="content" value="{{ old('content')?? $post->content?? ''}}">
    </div>
    <div class="col-lg-4"></div>
    <div class="text-danger">{{ $errors->first('content')}}</div>
</div>
<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="customer">Customer <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <select name="customer_id" id="customer" class="form-control">
            @foreach ($customers as $customer)
                <option value="{{$customer->id}}">{{$customer->name}}</option>
            @endforeach

        </select>

    </div>
    <div class="col-lg-4"></div>
    <div class="text-danger">{{ $errors->first('customer_id')}}</div>
</div>
<div class="form-group row">
    <label class="col-lg-4 col-form-label" for="image">Image <span class="text-danger">*</span>
    </label>
    <div class="col-lg-6">
        <input type="file" class="form-control" name="image" id="image" >
    </div>
</div>

{{-- <label for="title">Title</label>
<input type="text" name="title" id="title" value="{{ old('title')?? $post->title?? ''}}">
<div class="error">{{$errors->first('title')}}</div><p></p>
    <label for="content">Content</label>
<input type="text" name="content" id="content" value="{{ old('content')?? $post->content?? ''}}"><div class="error">{{$errors->first('content')}}</div><p></p>
    <label for="customer">Customer</label>
<select name="customer_id" id="customer">
    @foreach ($customers as $customer)
        <option value="{{$customer->id}}">{{$customer->name}}</option>
    @endforeach

</select><p></p> --}}
