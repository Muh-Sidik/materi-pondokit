@extends('layouts.navbar')

@section('title')
    Contact
@endsection

@section('navbar')
    


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">

    
<!-- Material form contact -->
<div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Contact us</strong>
        </h5>
    
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="#!">
    
                <!-- Name -->
                <div class="md-form mt-3">
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="name">Nama</label>
                </div>
    
                <!-- E-mail -->
                <div class="md-form">
                    <input type="email" id="email" name="email" class="form-control">
                    <label for="email">E-mail</label>
                </div>
    
                <!-- Subject -->
                <span>Subject</span>
                <select class="mdb-select">
                    <option value="" disabled>Pilih Kategori</option>
                    <option value="1" selected>Feedback</option>
                    <option value="2">Report a bug</option>
                    <option value="3">Feature request</option>
                    <option value="4">Feature request</option>
                </select>
    
                <!--Message-->
                <div class="md-form">
                    <textarea id="message" name="message" class="form-control md-textarea" rows="3"></textarea>
                    <label for="message">Message</label>
                </div>
    
                <!-- Copy -->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check" name="check">
                    <label class="form-check-label" for="check">Kirim saya salinan pesan ini</label>
                </div>
    
                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Kirim</button>
    
            </form>
            <!-- Form -->
    
        </div>
    
    </div>
    <!-- Material form contact -->
</div>
</div>
</div>

@endsection