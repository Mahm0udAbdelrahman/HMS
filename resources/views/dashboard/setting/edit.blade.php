@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                edit setting
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.setting.update', $setting->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')



                                @if(App::getLocale()=='en')
                                <img  id="img-prv" width="250px" height="250px" src="" alt="">


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" value="{{ $setting->address_en }}" class="form-control" name="address_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('address_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" value="{{ $setting->description_en }}" class="form-control" name="description_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" value="{{ $setting->email_en }}" class="form-control" name="email_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" value="{{ $setting->phone_en }}" class="form-control" name="phone_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                    <input type="text" value="{{ $setting->facebook_en }}" class="form-control" name="facebook_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('facebook_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                    <input type="text" value="{{ $setting->instagram_en }}" class="form-control" name="instagram_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('instagram_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                    <input type="text" value="{{ $setting->twitter_en }}" class="form-control" name="twitter_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('twitter_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror


                                <div class="form-group">
                                    <label for="image">Logo</label>
                                    <input name="logo_en" onchange="showPreview(event)"   class="form-control" id="category_image" placeholder="image" type="file">
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
                                    <input type="text" value="{{ $setting->address_ar }}" class="form-control" name="address_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('address_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">الوصف</label>
                                    <input type="text" value="{{ $setting->description_ar }}" class="form-control" name="description_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" value="{{ $setting->email_ar }}" class="form-control" name="email_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" value="{{ $setting->phone_ar }}" class="form-control" name="phone_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                    <input type="text" value="{{ $setting->facebook_ar }}" class="form-control" name="facebook_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('facebook_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                    <input type="text" value="{{ $setting->instagram_ar }}" class="form-control" name="instagram_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('instagram_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                    <input type="text" value="{{ $setting->twitter_ar }}" class="form-control" name="twitter_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('twitter_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror


                                <div class="form-group">
                                    <label for="image">لوجو</label>
                                    <input name="logo_ar" onchange="showPreview(event)"   class="form-control" id="category_image" placeholder="صوره" type="file">
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
                                    <input type="text" value="{{ $setting->address_fr }}" class="form-control" name="address_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('address_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">la description</label>
                                    <input type="text" value="{{ $setting->description_fr }}" class="form-control" name="description_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" value="{{ $setting->email_fr }}" class="form-control" name="email_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" value="{{ $setting->phone_fr }}" class="form-control" name="phone_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                    <input type="text" value="{{ $setting->facebook_fr }}" class="form-control" name="facebook_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('facebook_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                    <input type="text" value="{{ $setting->instagram_fr }}" class="form-control" name="instagram_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('instagram_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                    <input type="text" value="{{ $setting->twitter_fr }}" class="form-control" name="twitter_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('twitter_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror


                                <div class="form-group">
                                    <label for="image">logo</label>
                                    <input name="logo_fr" onchange="showPreview(event)"   class="form-control" id="category_image" placeholder="image" type="file">
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







                                <button type="submit" class="btn btn-primary">edit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
