<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
    <x-load-styles></x-load-styles>
</head>
<body>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 font-Galdeano">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
            </div>
        
            <div class="mb-4 font-medium text-sm text-green-600 verification-message"></div>
        
            <div class="mt-4 flex items-center justify-between">
                <form id="verifyEmail" action="{{route('verification.send')}}">
                    @csrf
                    <button class="bg-[#39190c] text-white mt-5 w-full text-xl px-4 py-2 rounded-md hover:text-[#39190c] hover:border-4 border-4 border-[#39190c] box-border hover:bg-transparent transition ease-in-out duration-150" type="submit">
                        Resend Verification Email
                    </button>
                </form>
        
                <form  method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="underline text-sm text-gray-600 hover:text-gray-900 relative top-6" type="submit">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>