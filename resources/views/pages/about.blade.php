@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">About Me</div>

                <div class="card-body">
                    <div class="text-center mb-4">
                    <img src="{{ asset('assets/images/274854819_4977875062293299_718020069643199321_n.jpg') }}" alt="Profile Image" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                    </div>

                    <p class="text-center lead">Hello, I'm Md.Sakib Rahman, and I'm a recent post graduate student from Daffodil International University.I'm 29 years old. I live in Dhaka with my family. Personally, I am an introvert person but if I want you to know one thing about me, it shoulb be, I can make people feel comfortable around me which is one of my strength. About my weekness, I can't say "No" or "Sorry I can't" to people I know if they want any favour from me.</p>
                    <p class="text-center lead">Feel free to reach out to me if you have any questions or just want to chat!</p>

                    <div class="text-center mt-4">
                        <a href="https://www.facebook.com/sakib.rahman.31" target="_blank" class="btn btn-primary btn-social mx-2"><i class="fab fa-facebook"></i> Facebook</a>

                        <a href="https://www.instagram.com/sakib_polash/" target="_blank" class="btn btn-danger btn-social mx-2"><i class="fab fa-instagram"></i> Instagram</a>

                        <a href="https://www.linkedin.com/in/sakib-rahman-553121157/" target="_blank" class="btn btn-info btn-social mx-2"><i class="fab fa-linkedin"></i> LinkedIn</a>

                        <a href="https://github.com/sakib652" target="_blank" class="btn btn-dark btn-social mx-2"><i class="fab fa-github"></i> GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
