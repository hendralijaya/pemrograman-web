<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/reset.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/converter.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci1+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
    <div class="row vw-100 overflow-hidden max-vh-100">
        <div class="col-md-7 col-12 left-section d-flex flex-column align-items-center justify-content-md-center justify-content-start gap-4">
            {{-- how to access session and cookies in view --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container w-100 d-flex flex-column align-items-center justify-content-center gap-4">
                <div class="title">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="amount-wrapper w-100 d-flex flex-column align-items-center justify-content-center">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" id="amount" class="form-control text-center rounded-pill w-75">
                </div>
                <div class="converter-wrapper w-100 d-flex flex-column align-items-center justify-content-center gap-3">
                    <div class="from-converter-wrapper w-100 d-flex flex-column align-items-center justify-content-center">
                        <label for="from" class="form-label">From</label>
                        <select name="from" id="from" class="form-select rounded-pill text-center w-75">
                            @foreach($currencies as $code => $name)
                                <option value="{{ $code }}">{{ $code }} - {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="buttons">
                        <button id="reverse" class="btn btn-light rounded-pill"><i class="bi bi-arrow-down-up"></i></button>
                    </div>
                    <div class="to-converter-wrapper w-100 d-flex flex-column align-items-center justify-content-center">
                        <label for="to" class="form-label">To</label>
                        <select name="to" id="to" class="form-select rounded-pill text-center w-75">
                            @foreach($currencies as $code => $name)
                                <option value="{{ $code }}">{{ $code }} - {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="buttons w-75">
                    <button id="convert" class="btn btn-primary rounded-pill w-100">Convert</button>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-12 right-section d-flex flex-column justify-content-md-center justify-content-start text-light">

            <div class="container d-flex flex-column justify-content-center text-light">
                <div class="result-wrapper d-flex flex-column align-items-md-end align-items-center">
                    <label class="result display-6 fw-normal" id="from-result">$ 100</label>
                    <label class="currency h4 fw-normal fst-italic" id="from-currency">USD</label>
                </div>
                <div class="result-wrapper d-flex flex-column align-items-md-end align-items-center">
                    <label class="result display-6 fw-normal" id="to-result">Rp 1.500.000</label>
                    <label class="currency h4 fw-normal fst-italic" id="to-currency">IDR</label>
                </div>
                <label class="exchange-rate d-flex flex-column align-items-md-end align-items-center h4 fw-normal" id="exchange-rate">1 USD = 15.000 IDR</label>
            </div>
        </div>
        <!-- Add the following lines to show login/register links -->
        @if (Route::has('login'))
        <div class="w-100 d-flex flex-row justify-content-end position-fixed">
            @auth
                <a href="{{ url('/converter') }}" class="mx-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white link-light py-3">Converter Home</a>
            @else
                <a href="{{ route('login') }}" class="mx-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mx-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                @endif
            @endauth
        </div>
        @endif
        <!-- End login/register links -->
    </div>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="http://127.0.0.1:8000/js/converter.js"></script>
    <script src="http://127.0.0.1:8000/js/converterAPI.js"></script>
</body>
</html>
