@extends('layouts.master')
@push('styles')
<style>
    .service-margin{
    margin-top:100px;
    margin-bottom: 30px;
}
</style>
@endpush

@section('content')
    <div class="container service-margin">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card-group mt-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <form method="post" action="#">
                                @csrf
                                <h2 class="text-center">Looking For Travel Consultation</h2>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input type="hidden" name="service_name" value="">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                                    <div class="col-md-6">
                                        <textarea name="message" id="" cols="50" rows="10"></textarea>

                                  
                                
                                    </div>
                                </div>

                           

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>

                                     
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection