<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    <style>
        :root {
            --theme-color: {{ env('THEME_COLOR', '#000000') }};
        }

        body {
            background-color: var(--theme-color);
        }
    </style>
</head>

<body>
    <section class="ftco-section py-5 mt-4 ml-2">
        <div class="container d-flex justify-content-center">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="wrapper img"
                        style="background-image: url('{{ asset('admin/assets/images/img.jpg') }}');">
                        <div class="row">
                            <div class="col-md-9 col-lg-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch with us</h3>
                                    <div class="mb-4">
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-4">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm"
                                        action="{{ route('contact.store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="message">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"
                                                        required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/js/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script> --}}
</body>

</html>
