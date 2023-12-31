@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-4 mb-4 card">
                <h3 class="card-header">Edit Profile</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="username">{{ __('Username') }}</label>
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}" required autocomplete="username" autofocus>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="mb-3 form-group">
                            <label for="contact_number">{{ __('Contact Number') }}</label>
                            <input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" placeholder="Isi data kamu" name="contact_number" value="{{ old('contact_number', $user->contact_number) }}">
                        </div>

                        <div class="mb-3 form-group">
                            <label for="education">{{ __('Education') }}</label>
                            <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" placeholder="Isi data kamu" name="education" value="{{ old('education', $user->education) }}">
                        </div>

                        <div class="grid flex-row gap-3 mb-3 d-flex">
                            <!-- <div class="mb-3 form-group">
                                <label for="province" class="form-label">Province</label>
                                <select class="form-control" id="province" name="province">
                                    <option>Provinsi</option>
                                </select>
                            </div> -->
                            <script>
                                // fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
                                //     .then(response => response.json())
                                //     .then(provinces => {
                                //         var data = provinces;
                                //         var tampung = '<option>Provinsi</option>';
                                //         array.forEach(element => {
                                //             tampung += '<options data-reg="${element.id}" value="${element.name}">${element.name}</options>';
                                //         });
                                //         document.getElementById('province').innerHTML = tampung;
                                //     });
                            </script>
                            <div class="mb-3 form-group">
                                <label for="province">{{ __('Province') }}</label>
                                <input id="province" type="text" class="form-control" name="province" placeholder="Isi data kamu" value="{{ old('province', $user->province) }}">
                            </div>
                        
                            <div class="mb-3 form-group">
                                <label for="city">City</label>
                                <input id="city" type="text" class="form-control" name="city" placeholder="Isi data kamu" value="{{ old('city', $user->city) }}">
                            </div>                            
                        </div>

                        <div class="mb-3 form-group">
                            <label for="address">{{ __('Address') }}</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Isi data kamu">{{ old('address', $user->address) }}</textarea>
                        </div>
                        
                        <p class="mb-3">Media sosial (opsional)</p>
                        <div class="grid flex-row gap-3 d-flex">
                            <div class="mb-3 form-group">
                                <label for="social_media">{{ __('Instagram') }}</label>
                                <input id="social_media" type="text" class="form-control" name="instagram" value="{{ old('instagram', $user->instagram) }}">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="twitter">{{ __('Twitter') }}</label>
                                <input id="twitter" type="text" class="form-control" name="twitter" value="{{ old('twitter', $user->twitter) }}">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="linkedin">{{ __('Linkedin') }}</label>
                                <input id="linkedin" type="text" class="form-control" name="linkedin" value="{{ old('linkedin', $user->linkedin) }}">
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="social_media">{{ __('Twitter') }}</label>
                            <input id="social_media" type="text" class="form-control" name="instagram" value="{{ old('twitter', $user->twitter) }}">
                            @error('social_media')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="social_media">{{ __('linkedin') }}</label>
                            <input id="social_media" type="text" class="form-control" name="instagram" value="{{ old('instagram', $user->linkedin) }}">
                            @error('social_media')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->

                        <div class="mb-0 mt-2 form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





