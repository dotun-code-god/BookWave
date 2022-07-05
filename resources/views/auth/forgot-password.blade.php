<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <x-load-styles></x-load-styles>
</head>
<body>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 font-Galdeano">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </div>

            @if (session('status'))
                <div class="font-medium text-sm text-green-600 mb-4"">
                    {{session('status')}}
                </div>
            @endif

            @if ($errors->any())
                <div class="font-medium text-red-600">
                    Whoops! Something went wrong.
                </div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{route('password.email')}}" method="POST">
                <div class="text-xl xs:text-lg mt-5">
                    <label for="name">Email :  <span class="text-[red]">*</span> </label>
                    <input type="email" id="email" class="form-inputs" value="{{old('email')}}" required autofocus>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="bg-[#39190c] text-white mt-5 w-full text-2xl py-2 rounded-md hover:text-[#39190c] hover:border-4 border-4 border-[#39190c] box-border hover:bg-transparent">
                        Email Password Reset Link
                    </button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>