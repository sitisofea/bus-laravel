@extends('layouts.auth')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection

@section('content')
    <div class="card">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="float-start">
                        <h2>Update SMS</h2>
                    </div>
                    <div class="float-end">
                        <a class="btn btn-outline-primary btn-uppercase" href="{{ route('sms.index') }}"> Back</a>
                    </div>
                </div>
            </div><br>
            <form action="{{ route('sms.update', $sms->id) }}" method="POST">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', optional($sms)->title) }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Content:</strong>
                            <textarea type="text" style="height:100px;" name="content" id="content" class="ckeditor form-control" required> 
                                {{ old('content', optional($sms)->content) }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Publish Date:</strong>
                            <input type="date" name="date" id="date" class="form-control"
                                value="{{ old('date', optional($sms)->date) }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Publish Time:</strong>
                            <input type="time" name="time" id="time" class="form-control"
                                value="{{ old('time', optional($sms)->time) }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Status:</strong>
                            <br>
                            <input type="radio" id="status_draft" name="status" value="0"
                                {{ $sms->status == '0' ? 'checked' : '' }} required>
                            <label for="status_draft">Draft</label><br>

                            <input type="radio" id="status_publish" name="status" value="1"
                                {{ $sms->status == '1' ? 'checked' : '' }} required>
                            <label for="status_publish">Publish</label><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-success btn-uppercase"><i
                                class="ti-check-box mr-2"></i>Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
