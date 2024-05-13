<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1))
        }

        .mask-custom {
            background: rgba(24, 24, 16, .2);
            border-radius: 2em;
            backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 255, 255, 0.05);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }
    </style>
</head>

<body>
    <section class="gradient-custom p-5 m-5">
        <div class="container py-5">

            <div class="row">

                <div class="col-md-6 col-lg-5 col-xl-5 mb-4 mb-md-0">

                    <h5 class="font-weight-bold mb-3 text-center text-white">Member</h5>

                    <div class="card mask-custom">
                        <div class="card-body">

                            <ul class="list-unstyled mb-0">
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">John Doe</p>
                                                <p class="small text-white">Hello, Are you there?</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Just now</p>
                                            <span class="badge bg-danger float-end">1</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Danny Smith</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">5 mins ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Alex Steward</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Ashley Olsen</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Kate Moss</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom"
                                    style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Lara Croft</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#!" class="d-flex justify-content-between link-light">
                                        <div class="d-flex flex-row">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                alt="avatar"
                                                class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Brad Pitt</p>
                                                <p class="small text-white">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-white mb-1">5 mins ago</p>
                                            <span class="text-white float-end"><i class="fas fa-check"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-7 col-xl-7">

                    <ul class="list-unstyled text-white">
                        @foreach ($messages as $message)
                            @if ($message['senderId'] != auth()->user()->id)
                                <li class="d-flex justify-content-between mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                        alt="avatar"
                                        class="rounded-circle d-flex align-self-start me-3 shadow-1-strong"
                                        width="60">
                                    <div class="card mask-custom">
                                        <div class="card-header d-flex justify-content-between p-3"
                                            style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                            <p class="fw-bold mb-0">{{ $message['receiver'] }}</p>
                                            <p class="text-light small mb-0"><i class="far fa-clock"></i> 12 mins ago
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0">{{ $message['message'] }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li class="d-flex justify-content-between mb-4">
                                    <div class="card mask-custom w-100">
                                        <div class="card-header d-flex justify-content-between p-3"
                                            style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                            <p class="fw-bold mb-0">{{ $message['sender'] }}</p>
                                            <p class="text-light small mb-0"><i class="far fa-clock"></i> 13 mins ago
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0">
                                                {{ $message['message'] }}
                                            </p>
                                        </div>
                                    </div>
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp"
                                        alt="avatar"
                                        class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong"
                                        width="60">
                                </li>
                            @endif
                            {{-- <li class="d-flex justify-content-between mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                                    class="rounded-circle d-flex align-self-start me-3 shadow-1-strong"
                                    width="60">
                                <div class="card mask-custom">
                                    <div class="card-header d-flex justify-content-between p-3"
                                        style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                        <p class="fw-bold mb-0">Brad Pitt</p>
                                        <p class="text-light small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut
                                            labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </li> --}}
                        @endforeach
                        <form id="sendMessageForm" method="POST">
                            @csrf

                            <li class="mb-3">
                                <div data-mdb-input-init class="form-outline form-white">
                                    <textarea class="form-control" id="textAreaExample3" name="message" rows="4"></textarea>
                                    <label class="form-label" for="textAreaExample3">Message</label>
                                </div>
                            </li>
                            <input type="hidden" name="sender_id" value="{{ $senderId }}">
                            <input type="hidden" name="receiver_id" value="{{ $receiverId }}">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-light btn-lg btn-rounded float-end">Send</button>
                        </form>
                    </ul>

                </div>

            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#sendMessageForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                var formData = $(this).serialize(); // Serialize form data
                console.log(formData);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('send-message') }}",
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        handleSuccess(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        handleError(xhr.statusText);
                    }
                });
            });

            function handleSuccess(response) {
                // Here you can handle the successful response from the server
                console.log("Success:", response);
                // Example: Show a success message to the user
                alert("Message sent successfully!");
            }

            function handleError(error) {
                // Here you can handle errors, including network errors and server-side errors
                console.error("Error:", error);
                // Example: Show an error message to the user
                alert("An error occurred while sending the message. Please try again later.");
            }
        });
    </script>

</body>

</html>
