@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Add setting
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.setting.store') }}" enctype="multipart/form-data">
                                @csrf

                                @if(App::getLocale()=='en')
                                <img  id="img-prv" width="250px" height="250px" src="" alt="">


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" value="{{ old('address_en') }}" class="form-control" name="address_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('address_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" value="{{ old('description_en') }}" class="form-control" name="description_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" value="{{ old('phone') }}" class="form-control" name="phone"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                    <input type="text" value="{{ old('facebook') }}" class="form-control" name="facebook"
                                        id="exampleInputEmail1">

                                </div>
                                @error('facebook')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                    <input type="text" value="{{ old('instagram') }}" class="form-control" name="instagram"
                                        id="exampleInputEmail1">

                                </div>
                                @error('instagram')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                    <input type="text" value="{{ old('twitter') }}" class="form-control" name="twitter"
                                        id="exampleInputEmail1">

                                </div>
                                @error('twitter')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror


                                <div class="form-group">
                                    <label for="image">Logo</label>
                                    <input name="logo_en" onchange="showPreview(event)"   class="form-control" id="category_image" placeholder="category_image" type="file">
                                </div>
                                @error('logo_en')
                                <span class="text-denger" >{{ $message }}</span>
                                @enderror
                                <script>
                                    function showPreview(event)
                                    {
                                        if(event.target.files.length > 0)
                                        {
                                            let src = URL.createObjectURL(event.target.files[0]);
                                            let prv = document.getElementById('img-prv');
                                            prv.src = src;
                                        }
                                    }
                                </script>
                                @endif



                                @if(App::getLocale()=='ar')
                                <img  id="img-prv" width="250px" height="250px" src="" alt="">


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">العنوان</label>
                                    <input type="text" value="{{ old('address_ar') }}" class="form-control" name="address_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('address_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">الوصف</label>
                                    <input type="text" value="{{ old('description_ar') }}" class="form-control" name="description_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ايميل</label>
                                    <input type="text" value="{{ old('email') }}" class="form-control" name="email"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">تليفون</label>
                                    <input type="text" value="{{ old('phone') }}" class="form-control" name="phone"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">فيسبوك</label>
                                    <input type="text" value="{{ old('facebook') }}" class="form-control" name="facebook"
                                        id="exampleInputEmail1">

                                </div>
                                @error('facebook')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">انستجرام</label>
                                    <input type="text" value="{{ old('instagram') }}" class="form-control" name="instagram"
                                        id="exampleInputEmail1">

                                </div>
                                @error('instagram')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">تويتر</label>
                                    <input type="text" value="{{ old('twitter') }}" class="form-control" name="twitter"
                                        id="exampleInputEmail1">

                                </div>
                                @error('twitter')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror


                                <div class="form-group">
                                    <label for="image">لوجو</label>
                                    <input name="logo_ar" onchange="showPreview(event)"   class="form-control" id="category_image" placeholder="category_image" type="file">
                                </div>
                                @error('logo_ar')
                                <span class="text-denger" >{{ $message }}</span>
                                @enderror
                                <script>
                                    function showPreview(event)
                                    {
                                        if(event.target.files.length > 0)
                                        {
                                            let src = URL.createObjectURL(event.target.files[0]);
                                            let prv = document.getElementById('img-prv');
                                            prv.src = src;
                                        }
                                    }
                                </script>
                                @endif




                                @if(App::getLocale()=='fr')
                                <img  id="img-prv" width="250px" height="250px" src="" alt="">


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">la adresse</label>
                                    <input type="text" value="{{ old('address_fr') }}" class="form-control" name="address_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('address_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">la description</label>
                                    <input type="text" value="{{ old('description_fr') }}" class="form-control" name="description_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" value="{{ old('phone') }}" class="form-control" name="phone"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                    <input type="text" value="{{ old('facebook') }}" class="form-control" name="facebook"
                                        id="exampleInputEmail1">

                                </div>
                                @error('facebook')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                    <input type="text" value="{{ old('instagram') }}" class="form-control" name="instagram"
                                        id="exampleInputEmail1">

                                </div>
                                @error('instagram')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                    <input type="text" value="{{ old('twitter') }}" class="form-control" name="twitter"
                                        id="exampleInputEmail1">

                                </div>
                                @error('twitter')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror


                                <div class="form-group">
                                    <label for="image">logo</label>
                                    <input name="logo_fr" onchange="showPreview(event)"   class="form-control" id="category_image" placeholder="category_image" type="file">
                                </div>
                                @error('logo_fr')
                                <span class="text-denger" >{{ $message }}</span>
                                @enderror
                                <script>
                                    function showPreview(event)
                                    {
                                        if(event.target.files.length > 0)
                                        {
                                            let src = URL.createObjectURL(event.target.files[0]);
                                            let prv = document.getElementById('img-prv');
                                            prv.src = src;
                                        }
                                    }
                                </script>
                                @endif








                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
