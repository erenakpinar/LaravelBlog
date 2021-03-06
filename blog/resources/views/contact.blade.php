@extends('masterpage')
@section('title', 'İletişim')
@section('content')
    <h1 class="page-header">
        İletişim
        <small>
            Yaz Bize!
        </small>
    </h1>


    <form name="sentMessage" id="contactForm" novalidate>
        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Ad Soyad</label>
                <input type="text" class="form-control" placeholder="Ad Soyad" id="name" required
                       data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Email Adres</label>
                <input type="email" class="form-control" placeholder="Email Adres" id="email" required
                       data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Telefon Numarası</label>
                <input type="tel" class="form-control" placeholder="Telefon Numarası" id="phone" required
                       data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Mesaj</label>
                <textarea rows="5" class="form-control" placeholder="Mesaj" id="message" required
                          data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="row">
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-default">Gönder</button>
            </div>
        </div>
    </form>


@endsection